
<?php

              $conn = mysqli_connect( "localhost", "artrcfaw_bookutravel", "artravel80!", "artrcfaw_boo" );
              if ( $_SERVER[ 'REQUEST_METHOD' ] == "POST" ) {


                $name = $_POST[ 'name' ];
                $email = $_POST[ 'email' ];
                $username = $_POST[ 'username' ];
				$number = $_POST[ 'number' ];
				$city = $_POST['city'];
                $password = $_POST[ 'password' ];
                $password=hash('ripemd160' ,$password);
                
                $id = "";
                $choice = 0;
                for ( $i = 0; $i < 10; $i++ ) {
                  $choice = rand( 1, 3 );
                  if ( $choice == 1 ) {
                    $id .= chr( rand( 97, 122 ) );
                  } else if ( $choice == 2 ) {
                    $id .= chr( rand( 65, 90 ) );
                  } else if ( $choice == 3 ) {
                    $id .= chr( rand( 48, 57 ) );
                  }
                }
                if ( !$_POST[ 'username' ] | !$_POST[ 'password' ] | !$_POST[ 'number' ] | !$_POST[ 'email' ] | !$_POST[ 'name' ] | !$_POST[ 'city' ] ) 
					
					{
                  header("Location:register.html");
                }
				  
                echo "<script>console.log('$id')</script>";
                $sql = "Insert into users(Username,Password,Name,Email,Number,City) Values('$username','$password','$name','$email','$number','$city')";
                mysqli_query( $conn, $sql );


              }


              ?>
