<?php

/*
Template name: Contact
 */
?>
<?php get_header(); ?>
<div id="content">
    <div class="container">
        <h1 class="entry-title">Contact Me</h1>
        <form class="contact_form" method="post" action="contactform.php">
            <label>Name</label>
            <input name="name" placeholder="Type your name">
            <label>Email</label>
            <input name="email" type="email" placeholder="Type your email">
            <label>Subject</label>
            <input name="subject" placeholder="Type a subject">
            <label>Your Message</label>
            <textarea name="message" placeholder="Type your message"></textarea>
            <label>What is 900 / 9? (Anti-spam)</label>
            <input name="human" placeholder="Type your answer here">
            <input id="submit" name="submit" type="submit" value="Submit">
        </form>     
        <?php
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $human = $_POST['human'];
            //$from = 'From: pierre@pierreferre.com';
            $to = 'pierre@pierreferre.com';
            $subject = $subject;
            $body = "From: $name\nE-mail: $email\nMessage:\n$message";

            if ($_POST['submit'] && $human == '100') {
                if (mail($to, $subject, $body)) {
                    echo "<p>Message successfully sent!</p>";
                } else {
                    echo "<p>There was an error, message not sent.</p>";
                }
            }  else if ($_POST['submit'] && $human != '100') {
                echo "<p>Something went wrong, maybe you are not a human? If I am mistaken, please try again.</p>";
            }
        ?>
    </div>
</div>
<aside><?php get_sidebar(); ?></aside>
<?php get_footer(); ?>