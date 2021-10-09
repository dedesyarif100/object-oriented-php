<?php
require_once "ValidationException.php";
require_once "LoginRequest.php";
require_once "Validation.php";

$LoginRequest = new LoginRequest();
$LoginRequest->username = "   ";
$LoginRequest->password = "   ";

try {
    echo "cek";
    ValidateLoginRequest($LoginRequest);
    echo "Login Berhasil";
} catch (ValidationException | Exception $exception) {
    echo "Validation Error : ".$exception->getMessage();
    var_dump($exception->getTrace());
    // echo $exception->getTraceAsString();
} finally {
    echo "ERROR ATAU TIDAK, AKAN DIEKSEKUSI";
}
// catch (Exception $exception) {
//     echo "Error : ".$exception->getMessage();
// }