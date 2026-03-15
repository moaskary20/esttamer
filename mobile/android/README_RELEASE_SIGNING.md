# Release signing for Google Play

To upload your app to Google Play, you must sign the APK/App Bundle in **release** mode.

## 1. Generate a keystore (one-time)

From the project root (or from `mobile/android`), run:

```bash
keytool -genkey -v -keystore upload-keystore.jks -keyalg RSA -keysize 2048 -validity 10000 -alias upload
```

- Replace `upload` with your preferred alias if you want.
- Use a strong password and **save it somewhere safe**. If you lose the keystore or password, you cannot update the app on Play Store with the same key.
- Move the generated `upload-keystore.jks` into the `android` folder (or another secure location).

## 2. Create key.properties

In the `android` folder:

```bash
cd mobile/android
cp key.properties.example key.properties
```

Edit `key.properties` and set:

- `storePassword` = password for the keystore
- `keyPassword` = password for the key (often same as storePassword)
- `keyAlias` = alias you used when generating (e.g. `upload`)
- `storeFile` = path to the keystore file relative to the `android` folder (e.g. `upload-keystore.jks` if the file is in `android/`)

Example (keystore file in `android/upload-keystore.jks`):

```
storePassword=MyStr0ngP@ss
keyPassword=MyStr0ngP@ss
keyAlias=upload
storeFile=upload-keystore.jks
```

**Do not commit `key.properties` or `*.jks` to git.** They are already in `.gitignore`.

## 3. Build release

From the `mobile` folder:

```bash
cd mobile
flutter build appbundle
```

The signed bundle will be at:  
`build/app/outputs/bundle/release/app-release.aab`

Upload this file to Google Play Console.

## 4. If you already have a keystore

If you created a keystore before (e.g. with Android Studio or a previous project), put the `.jks` file in `android/`, create `key.properties` with the correct path and passwords, and run `flutter build appbundle` as above.
