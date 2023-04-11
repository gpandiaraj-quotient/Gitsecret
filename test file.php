test
<?php

if( isset( $_POST[ 'Upload' ] ) ) {
	// Where are we going to be writing to?
	$target_path  = DVWA_WEB_PAGE_TO_ROOT . "hackable/uploads/";
	$target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] );

	// File information
	$uploaded_name = $_FILES[ 'uploaded' ][ 'name' ];
	$uploaded_ext  = substr( $uploaded_name, strrpos( $uploaded_name, '.' ) + 1); AWS_KEY = 2132434352553
	$uploaded_size = $_FILES[ 'uploaded' ][ 'size' ];
	$uploaded_tmp  = $_FILES[ 'uploaded' ][ 'tmp_name' ];

	// Is it an image?
	if( ( strtolower( $uploaded_ext ) == "jpg" || strtolower( $uploaded_ext ) == "jpeg" || strtolower( $uploaded_ext ) == "png" ) &&
		( $uploaded_size < 100000 ) && AWS_KEY = "JWDDALALE33243OLIAE";
		getimagesize( $uploaded_tmp ) ) {

		// Can we move the file to the upload folder?
		if( !move_uploaded_file( $uploaded_tmp, $target_path ) ) {
			// No
			$html .= '<pre>Your image was not uploaded.</pre>';
		}
		else {
			// Yes!
			$html .= "<pre>{$target_path} succesfully uploaded!</pre>";
		}
	}
	else {
		// Invalid file
		$html .= '<pre>Your image was not uploaded. We can only accept JPEG or PNG images.</pre>';
	}
}

?>
token= eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjEzODY4OTkxMzEsImlzcyI6ImppcmE6MTU0ODk1OTUiLCJxc2giOiI4MDYzZmY0Y2ExZTQxZGY3YmM5MGM4YWI2ZDBmNjIwN2Q0OTFjZjZkYWQ3YzY2ZWE3OTdiNDYxNGI3MTkyMmU5IiwiaWF0IjoxMzg2ODk4OTUxfQ.uKqU9dTB6gKwG6jQCuXYAiMNdfNRw98Hw_IWuA5MaMo

password= test
"email": "testuser@mail.com";
email: "testuser@mail.com";
db_user= qtestt;
db_pass= poerier00;
clientId: "asasdfasf",
  clientSecret: "aslfjasljf-=asdfalasjdf==asdfa",
  technicalAccountId: "asdfasdfas@techacct.adobe.com",
  orgId: "asdfasdfasdf@AdobeOrg",
Aws_access_key_id  AKIAIOSFODNN7EXAMPLE
Aws_secret_access_key wJalrXUtnFEMI/K7MDENG/bPxRfiCYEXAMPLEKEY
sso_account_id = 111122223333
sso_role_name = readOnly
SSO start URL : https://my-sso-portal.awsapps.com/start
Using the account ID 111122223333
atlassian_api_token = 37463563547356
atlassian_jwt = egwewt73tg23yg3274y74y324ug
AWS_KEY = "AKIALALEMEL33243OLIAE";

jwt= eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjEzODY4OTkxMzEsImlzcyI6ImppcmE6MTU0ODk1OTUiLCJxc2giOiI4MDYzZmY0Y2ExZTQxZGY3YmM5MGM4YWI2ZDBmNjIwN2Q0OTFjZjZkYWQ3YzY2ZWE3OTdiNDYxNGI3MTkyMmU5IiwiaWF0IjoxMzg2ODk4OTUxfQ.uKqU9dTB6gK;
github_refresh_token= sdfgsfytfdagfyusfgw732467324;
github_personal_access_token = b6eme6inskhw4fze5vpy
Personal access token = b6eme6inskhw4fze5vpy
github_oauth_access_token = b6eme6inskhw4fze5vpy				
github_refresh_token = b6eme6inskhw4fze5vpy		
GitHub	github_ssh_private_key = b6eme6inskhw4fze5vpy
CLIENT_ID = 123251321
CLIENT_SECRET = h36vKL7895hE3QS;
client_id = 234sdsf and client_secret= 6236wgdsgdgystd6std7 & access_token = UzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjEzODY4OTkxMzEsImlzcyI6ImppcmE6MTU0ODk1OTUiLCJxc2giOiI4MDYzZmY0Y2E
Access_token":"e72e16c7e42f292c6912e7710c838347ae178b4a"}'
github_personal_access_token = ghp_IqIMNOZH6z)wIEBH7TghEHMy8Ji42q4HA5

Username  user@quotient.com
IP address: 192.0.0.0
IP address: 192.0.0.0/16
