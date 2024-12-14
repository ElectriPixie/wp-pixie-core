<?php
/*
 *Plugin Name:	Pixie Core Contact Form
 *Plugin URI:
 *Desciption:	Plugin to provive contact form to the pixie core theme
 *Version:	0.0.1
 *Author:	ElictiPixie
 *Author URI:
 */

function pc_contact_form_html()
{
  echo '<form action="'.esc_url($_SERVER['REQUEST_URI']).'" method="post">';
  echo '<label for="contact-name">Your Name</label>';
  echo '<input type="text" name="contact-name"/>';
  echo '<br/>';
  echo '<label for="contact-email">Your Email</label>';
  echo '<input type="text" name="contact-email"/>';
  echo '<br/>';
  echo '<label for="contact-subject">Subject</label>';
  echo '<input type="text" name="contact-subject"/>';
  echo '<br/>';
  echo '<label for="contact-message">Message</lablel>';
  echo '<input type="textarea" name="contact-message"/>';
  echo '<br/>';
  echo '<input type="submit" name="contact-submit" value="Send"/>';
  echo '</form>';
}

function pc_contact_form_send()
{
  if(isset($_POST['contact-submit']))
  {
    $contact_name=sanitize_text_field($_POST["contact-name"]);
    $contact_email=sanitize_email($_POST["contact-email"]);
    $contact_subject=sanitize_text_field($_POST["contact-subject"]);
    $contact_message=esc_textarea($_POST["contact-message"]);
    $send_to = get_option('admin_email');
    $message_headers = "From: $contact_name <$contact_email>"."\r\n";
    if(wp_mail($sendto, $contact_subject, $contact_message, $message_headers))
    {
      echo '<div>';
      echo '<p>Thanks for contacting me <3</p>';
      echo '</div>';
    }else{
      echo '<div>';
      echo '<p>An error occured</p>';
      echo '</div>';
    }
  }
}

function pc_contact_form_shortcode()
{
  ob_start();
  pc_contact_form_send();
  pc_contact_form_html();
  return ob_get_clean();
}

add_shortcode('pc_contact_form', 'pc_contact_form_shortcode');
?>
