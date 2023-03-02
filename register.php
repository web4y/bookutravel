
              <?php

              $conn = mysqli_connect( "localhost", "root", "", "register" );
              if ( $_SERVER[ 'REQUEST_METHOD' ] == "POST" ) {


                $name = $_POST[ 'name' ];
                $email = $_POST[ 'email' ];
                $username = $_POST[ 'username' ];
                $password = $_POST[ 'password' ];
                $number = $_POST[ 'number' ];
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
                if ( !$_POST[ 'username' ] | !$_POST[ 'password' ] | !$_POST[ 'number' ] | !$_POST[ 'email' ] | !$_POST[ 'name' ] ) {

                  die( 'You did not complete all of the required fields' );

                }
                echo "<script>console.log('$id')</script>";
                $sql = "Insert into users(Username,Password,Name,Email,Number) Values('$username','$password','$name','$email','$number')";
                mysqli_query( $conn, $sql );


              }


              ?>
            