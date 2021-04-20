<?php
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lessen02;host=localhost;","root","");
    $stmt=$pdo->query("select * from account");
    
    
    }
    ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>アカウント登録画面</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form method="post" action="regist_confirm.php">
        <label>姓</label>
        <br>
        <input type="text" size="10" name="family_name" pattern="[\u4E00-\u9FFF\u3040-\u309F―]*" required autofocus>
        <br>
        <p id="notice-input-family_name" style="display:none; color:red;">姓が未入力です</p>
        <label>名</label>
        <br>
        <input type="text" size="10" name="last_name" pattern="[\uu4E00-\u9FFF\u3040-\U309F―]*" required autofocus>
        <br>
        <p id="notice-input-last_name" style="display:none; color:red;">名が未入力です</p>
        <label>姓(カナ）</label>
        <br>
        <input type="text" size="10" name="family_name_kana" pattern="(?=.:?[_u3041-_u30FA])[_u30A1\U30FC]" required autofocus>
        <br>
        <p id="notice-input-family_name_kana" style="display:none; color:red;">姓（カナ）が未入力です</p>
        <label>名（カナ）</label>
        <br>
        <input type="text" size="10" name="last_name_kana" pattern="(?=.:?[_u3041-_u30FA])[_u30A1\U30FC]" required autofocus>
        <br>
        <p id="notice-input-last_name_kana" style="display:none; color:red;">名（カナ）が未入力です</p>
        <label>メールアドレス</label>
        <br>
        <input type="email" size="100" name="mail" required autofocus>
        <br>
        <p id="notice-input-mail" style="display:none; color:red;">メールアドレスが未入力です</p>
        <label>パスワード</label>
        <br>
        <input type="password" size="10" name="pasword" required autofocus>
        <br>
        <p id="notice-input-password" style="display:none; color:red;">パスワードが未入力です</p>
        <label>性別</label>
        <br>
        <input type="radio" name="gender" checked required autofocus>男
        <input type="radio" name="gender" required autofocus>女
        <br>
        <p id="notice-input-gender" style="display:none; cokor:red;">性別が未入力です</p>
        <label>郵便番号</label>
        <br>
        <input type="number" size="10" name="postal_code" required autofocus>
        <br>
        <p id="notice-input-postal_code" style="display:none; color:red;">郵便番号が未入力です</p>
    </form>
</body>

</html>
