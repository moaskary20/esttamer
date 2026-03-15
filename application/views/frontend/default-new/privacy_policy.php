<?php include "breadcrumb.php"; ?>

<section class="privacy-policy">
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <?php
                $custom_content = get_frontend_settings('privacy_policy');
                $custom_text = trim(strip_tags($custom_content));
                // اعرض المحتوى الكامل فقط إذا كان في الإعدادات نص سياسة خصوصية طويل (أكثر من 400 حرف)
                if (strlen($custom_text) > 400) {
                    echo $custom_content;
                } else {
                    ?>
                <div class="privacy-policy-content" style="direction: ltr; text-align: left; line-height: 1.9; font-size: 1.05em;">
                    <h1 style="font-size: 2rem; color: #1a202c; margin-bottom: 1.5rem; text-align: center;">Privacy Policy</h1>
                    <p style="color: #4a5568; margin-bottom: 1rem;"><strong>Last updated:</strong> <?php echo date('Y-m-d'); ?></p>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">1. Introduction</h2>
                    <p>Welcome to Esttamer. We respect your privacy and are committed to protecting your personal data. This Privacy Policy explains how we collect, use, and protect your information when you use our website (<strong>esttamer.com</strong>) and our app on Google Play. We comply with Google Play Store privacy policy requirements.</p>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">2. Data We Collect</h2>
                    <p>We may collect the following types of data:</p>
                    <ul style="margin: 0.5rem 0 1rem 1.5rem;">
                        <li><strong>Account data:</strong> Name, email address, password (encrypted), profile picture when uploaded.</li>
                        <li><strong>Usage data:</strong> Enrolled courses, progress in lessons, ratings and reviews, purchase history.</li>
                        <li><strong>Device data (app):</strong> Device type, operating system, unique app identifier for login and security purposes.</li>
                        <li><strong>Payment data:</strong> We do not store card numbers; transactions are processed through secure payment gateways (e.g. Stripe, PayPal) under their policies.</li>
                    </ul>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">3. How We Use Your Data</h2>
                    <p>We use data only for legitimate purposes, including:</p>
                    <ul style="margin: 0.5rem 0 1rem 1.5rem;">
                        <li>Creating and managing your account and login (website and app).</li>
                        <li>Providing the courses, content, and services you request.</li>
                        <li>Processing payments, issuing invoices, and sending subscription-related notifications.</li>
                        <li>Improving user experience, customer support, and responding to your inquiries.</li>
                        <li>Sending newsletters or offers only if you have agreed, and you may unsubscribe at any time.</li>
                        <li>Complying with the law and protecting our and users’ rights.</li>
                    </ul>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">4. Sharing Data with Third Parties</h2>
                    <p>We do not sell your personal data. We may share data only in these cases:</p>
                    <ul style="margin: 0.5rem 0 1rem 1.5rem;">
                        <li><strong>Service providers:</strong> Companies we use for hosting, payment processing, email delivery, or analytics, under data protection agreements.</li>
                        <li><strong>Legal requirements:</strong> When required by law or court order.</li>
                        <li><strong>Protecting rights:</strong> When necessary to protect the security of the platform or users.</li>
                    </ul>
                    <p>Our app on Google Play may use Google services (e.g. Firebase or app analytics) in accordance with Google’s privacy policy.</p>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">5. Data Security</h2>
                    <p>We take appropriate technical and organizational measures to protect your data, including encryption (e.g. HTTPS and TLS), secure storage of passwords, and limiting access to personal data to authorized personnel only. However, no transmission over the internet can be guaranteed to be fully secure.</p>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">6. Your Rights</h2>
                    <p>You have the right to:</p>
                    <ul style="margin: 0.5rem 0 1rem 1.5rem;">
                        <li><strong>Access:</strong> Request a copy of the personal data we hold about you.</li>
                        <li><strong>Correction:</strong> Request correction of any inaccurate or incomplete data.</li>
                        <li><strong>Deletion:</strong> Request deletion of your personal data, subject to legal or contractual obligations.</li>
                        <li><strong>Unsubscribe:</strong> Opt out of marketing messages at any time via the link in emails or account settings.</li>
                    </ul>
                    <p>To exercise these rights, please contact us using the email or contact form below.</p>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">7. Cookies and the Website</h2>
                    <p>We may use cookies and similar technologies on the website for login, remembering preferences, and analyzing visits. You can set your browser to refuse some cookies; note that this may affect some site features.</p>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">8. Children’s Privacy</h2>
                    <p>Our services are not directed at children under a certain age. If we learn that we have collected personal data from a child without parental consent, we will take steps to delete that information. If you are a parent and believe your child has provided us with personal data, please contact us.</p>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">9. Changes to This Policy</h2>
                    <p>We may update this Privacy Policy from time to time. We will post any changes on this page and update the “Last updated” date. We encourage you to review this page periodically. Your continued use of the website or app after changes means you accept the updated policy.</p>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">10. Contact Us</h2>
                    <p>For any privacy-related questions or to exercise your rights, you can contact us via:</p>
                    <ul style="margin: 0.5rem 0 1rem 1.5rem;">
                        <li>The <a href="<?php echo site_url('home/contact_us'); ?>">Contact Us</a> page on the website.</li>
                        <li>Email: <?php echo get_settings('system_email') ?: 'privacy@esttamer.com'; ?></li>
                    </ul>
                    <p style="margin-top: 2rem; color: #718096;">By using the Esttamer website or app, you agree to this Privacy Policy.</p>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
