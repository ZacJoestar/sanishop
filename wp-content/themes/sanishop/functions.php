<?php
/**
 * Created by PhpStorm.
 * User: zac
 * Date: 04/03/2018
 * Time: 19:02
 */

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

//response generation function

$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){

	global $response;

	if($type == "success") $response = "<div class='success'>{$message}</div>";
	else $response = "<div class='error'>{$message}</div>";

}

//response messages
$not_human       = "Vérification erronée.";
$missing_content = "Merci de remplir tous les champs.";
$email_invalid   = "Adresse mail non valide.";
$message_unsent  = "Le message n'a pas été envoyé. Merci de réessayer.";
$message_sent    = "Merci! Votre message a été envoyé.";

//user posted variables
$name = $_POST['message_name'];
$prenom = $_POST['message_prenom'];
$email = $_POST['message_email'];
$tel = $_POST['message_num'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];

//php mailer variables
$to = get_option('admin_email');
$subject = "Vous avez reçu un mail de votre site ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
           'Reply-to: ' . $email . "\r\n";

if(!$human == 0){
	if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
	else {

		//validate email
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			my_contact_form_generate_response("error", $email_invalid);
		else //email is valid
		{
			//validate presence of name and message
			if(empty($name) || empty($message)){
				my_contact_form_generate_response("error", $missing_content);
			}
			else //ready to go!
			{
				$sent = wp_mail($to, $subject, strip_tags($message), $headers);
				if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
				else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
			}
		}
	}
}
else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);