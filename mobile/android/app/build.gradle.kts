import java.util.Properties
import java.io.File
import java.io.FileInputStream

plugins {
    id("com.android.application")
    id("kotlin-android")
    // The Flutter Gradle Plugin must be applied after the Android and Kotlin Gradle plugins.
    id("dev.flutter.flutter-gradle-plugin")
}

// key.properties must be in the android/ folder (same folder as settings.gradle.kts)
val androidRootDir = project.layout.projectDirectory.asFile.parentFile
val keystorePropertiesFile = File(androidRootDir, "key.properties")
val keystoreProperties = Properties()
if (keystorePropertiesFile.exists()) {
    keystoreProperties.load(FileInputStream(keystorePropertiesFile))
}

val hasReleaseSigning = keystorePropertiesFile.exists() &&
    keystoreProperties.containsKey("storePassword") &&
    keystoreProperties.containsKey("keyPassword") &&
    keystoreProperties.containsKey("keyAlias") &&
    keystoreProperties.containsKey("storeFile")

android {
    namespace = "com.esttamer.mobile"
    compileSdk = flutter.compileSdkVersion
    ndkVersion = flutter.ndkVersion

    compileOptions {
        sourceCompatibility = JavaVersion.VERSION_17
        targetCompatibility = JavaVersion.VERSION_17
    }

    kotlinOptions {
        jvmTarget = JavaVersion.VERSION_17.toString()
    }

    signingConfigs {
        if (hasReleaseSigning) {
            create("release") {
                keyAlias = keystoreProperties["keyAlias"] as String
                keyPassword = keystoreProperties["keyPassword"] as String
                storeFile = File(androidRootDir, keystoreProperties["storeFile"] as String)
                if (!storeFile!!.exists()) {
                    throw GradleException(
                        "Keystore file not found: ${storeFile!!.absolutePath}\n" +
                        "Put your .jks file in android/ or fix storeFile in android/key.properties"
                    )
                }
                storePassword = keystoreProperties["storePassword"] as String
            }
        }
    }

    defaultConfig {
        applicationId = "com.esttamer.mobile"
        minSdk = flutter.minSdkVersion
        targetSdk = flutter.targetSdkVersion
        versionCode = flutter.versionCode
        versionName = flutter.versionName
    }

    buildTypes {
        release {
            if (!hasReleaseSigning) {
                throw GradleException(
                    "Release signing is required for Google Play.\n" +
                    "1. Create a keystore: cd mobile/android && keytool -genkey -v -keystore upload-keystore.jks -keyalg RSA -keysize 2048 -validity 10000 -alias upload\n" +
                    "2. Copy key.properties: cp key.properties.example key.properties\n" +
                    "3. Edit android/key.properties and set storePassword, keyPassword, keyAlias, storeFile=upload-keystore.jks\n" +
                    "See android/README_RELEASE_SIGNING.md for details."
                )
            }
            signingConfig = signingConfigs.getByName("release")
        }
    }
}

flutter {
    source = "../.."
}
