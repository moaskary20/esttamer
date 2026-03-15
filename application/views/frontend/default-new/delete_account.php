<?php include "breadcrumb.php"; ?>

<section class="privacy-policy">
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <div class="delete-account-content" style="direction: ltr; text-align: left; line-height: 1.9; font-size: 1.05em;">
                    <h1 style="font-size: 2rem; color: #1a202c; margin-bottom: 1.5rem; text-align: center;">Delete Account</h1>
                    <p style="color: #4a5568; margin-bottom: 1rem;"><strong>Last updated:</strong> <?php echo date('Y-m-d'); ?></p>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">1. Your Right to Delete Your Account</h2>
                    <p>You have the right to request deletion of your Esttamer account and the personal data associated with it at any time. This page explains how to do that and what happens when your account is deleted.</p>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">2. How to Request Account Deletion</h2>
                    <p>You can request account deletion in the following ways:</p>
                    <ul style="margin: 0.5rem 0 1rem 1.5rem;">
                        <li><strong>From the website:</strong> Log in to your account, go to your profile or account settings, and use the “Delete account” or “Request account deletion” option if available.</li>
                        <li><strong>From the mobile app:</strong> Open the Esttamer app, go to profile or settings, and use the account deletion option if available.</li>
                        <li><strong>By contacting us:</strong> Send an email to <?php echo get_settings('system_email') ?: 'support@esttamer.com'; ?> or use the <a href="<?php echo site_url('home/contact_us'); ?>">Contact Us</a> form and clearly state that you want to delete your account. Please use the email address linked to your Esttamer account so we can verify your identity.</li>
                    </ul>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">3. What Happens When Your Account Is Deleted</h2>
                    <p>When we process your deletion request:</p>
                    <ul style="margin: 0.5rem 0 1rem 1.5rem;">
                        <li>Your account will be deactivated and you will no longer be able to log in.</li>
                        <li>Your personal data (such as name, email, profile information) will be removed or anonymized in line with our data retention and deletion procedures.</li>
                        <li>You will lose access to any courses or content tied to your account, including enrollment and progress data.</li>
                        <li>Some data may be retained for a limited time where required by law (e.g. for tax, fraud prevention, or legal claims). After that period, it will be deleted or anonymized.</li>
                    </ul>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">4. Processing Time</h2>
                    <p>We will process your deletion request within a reasonable period, typically within 30 days. We may contact you to confirm your identity or your request before completing the deletion.</p>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">5. After Deletion</h2>
                    <p>Once your account is deleted, you can create a new account at any time if you wish to use Esttamer again. Any previous data linked to the deleted account will not be restored.</p>

                    <h2 style="font-size: 1.5rem; color: #2d3748; margin-top: 2rem; margin-bottom: 0.75rem;">6. Contact Us</h2>
                    <p>For any questions about account deletion or your personal data, contact us via:</p>
                    <ul style="margin: 0.5rem 0 1rem 1.5rem;">
                        <li>The <a href="<?php echo site_url('home/contact_us'); ?>">Contact Us</a> page on the website.</li>
                        <li>Email: <?php echo get_settings('system_email') ?: 'support@esttamer.com'; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
