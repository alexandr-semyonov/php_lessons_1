<?

function getUsersList(){
  $usersArray = file( __DIR__ . '/users.txt', FILE_IGNORE_NEW_LINES);
  for ($i = 0; $i<count($usersArray); $i++){
    $usersLine = explode ('-*-', $usersArray[$i]);
    $users[$usersLine[0]] = $usersLine[1];
  }
  return $users;
}

function existsUser($login){
  return array_key_exists($login, getUsersList());
}

function сheckPassword($login, $password){
  return password_verify ( $password, getUsersList()[$login]); 
}

function getCurrentUser(){
  if (isset($_SESSION['user'])){
      if (existsUser($_SESSION['user'])){
          $currentUser = $_SESSION['user'];
          return $currentUser;
      }
  };
  return null;
};

function makeRecordInLog($currentUser, $message, $file = ''){
  $pathToLog = __DIR__ . '/log.txt';
  switch ($message){
      case 'login': $message = ' Login'; break;
      case 'logout': $message = ' Logout'; break;
      case 'upload': $message = ' Uploaded image - ' . $file; break;
      case 'uploadfail': $message = ' Fail to upload file - ' . $file;break;
  }
  $data = date("Y-m-d H:i:s") . ' ' . $currentUser . $message . PHP_EOL;
  $fileHandler = fopen($pathToLog, 'a');
  fwrite($fileHandler, $data);
  fclose($fileHandler);
  return $data;
}

function getRandomName (){  
  $extension = strtolower(substr(strrchr($_FILES['galleryImage']['name'], '.'), 1));;
  do {
    $name = md5(microtime() . rand(0, 9999));
    $file = $name . '.' . $extension;
  } while (file_exists($file));
  return $file;
}