<?php
// ===================
// ログ
// ===================
// ログをとるか
ini_set('log_errors', 'on');
// ログの出力先を指定
ini_set('error_log', 'php_log');


// =====================
// セッション準備
// =====================
// セッションファイルを使う
session_start();
// 現在のセッションIDを新しく生成したものと置き換える（なりすましのセキュリティ対策）
session_regenerate_id();

// ====================
// グローバル変数
// ====================
// エラーメッセージ格納用の配列
$err_msg = array();

// ====================
// バリデーション関数
// ====================
// 未入力チェック
function validRequired($str, $key){
    if($str === '' || $str === null ){
        global $err_msg;
        $err_msg[$key] = '入力必須です。';
    }
}

// Email形式チェック
function validEmail($str, $key){
    if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $str)){
        global $err_msg;
        $err_msg[$key] = 'Emailの型式で入力してください。';
    }
}

function validMaxLen($str, $key, $max = 500){
    if(mb_strlen($str) > $max){
        global $err_msg;
        $err_msg[$key] = '500文字以内で入力してください。';
    }
}

// エラーメッセージ表示
function getErrMsg($key){
    global $err_msg;
    if(!empty($err_msg[$key])){
        return $err_msg[$key];
    }
}

?>