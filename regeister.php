<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    background: url(./IMG_2765.JPG);
    background-repeat: no-repeat;
    background-size: cover;
    display:flex;
    justify-content: center;
    flex-direction: column;
    align-items: center ;
    height: 100vh;
    margin:0;
}

.container {
    background-color: #ffffff;
    width: 400px;
    max-width: 400px;
    padding: 1rem;
    margin: 2rem;
    opacity: 0.9;
    box-shadow: 0 0 40px rgba(0,0,0,0.2);
    border-radius: 4px;
}

.container,
.form__input,
.form__button{
    font : 100 1rem 'Quicksand', san-serif;
}

.form >*:first-child {
    margin-top:0;
}

.form >*:last-child{
    margin-bottom: 0    ;
}

.form__message {
    text-align: center;
    margin : 1rem;
}

.form__message_error{
    color: red;
}

.form__message__success{
    color: green;
}

.form__title{
    font-size: 2rem;
    text-align: center;
    font-weight: 1000;
}

.form__input-group{
    margin-bottom: 0.75rem;
}

.form__input{
    display: block;
    padding: 0.75rem;
    width: 100%;
    box-sizing : border-box;
    outline: none;
    border: 1px solid #dddddd;
    border-radius: 4px;
    background: #eeeeee;
}

.form__button {
    display: block;
    width: 100%;
    padding : 0.75rem;
    background-color: green;
    outline: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.form__button:hover{
    opacity: 0.7;
}

.form__text {
    text-decoration: none;
}

.form__text:hover {
    color: gray;
}

.form__hidden{
    display:none;
}

.form__link {
    text-align: center;
}
    </style>
</head>
<body>
    <div class="container">
        <form action="_action/create.php" method="post" class="form" id="CreateAccount">
            <h1 class="form__title">Create Account</h1>

            <?php if(isset($_GET['error'])) : ?>
                <div class="form__message form__message_error"></div>
            <?php endif ?>            
            
            <div class="form__input-group">
                <input name="name" type="text" class="form__input" placeholder="Username" required>
            </div>

            <div class="form__input-group">
                <input name="email" type="text" class="form__input" placeholder="E-mail" required>
            </div>

            <div class="form__input-group">
                <input name="phone" type="number" class="form__input" placeholder="Phone" required>
            </div>

            <div class="form__input-group">
                <input name="password" type="password" class="form__input" placeholder="Password" required>
            </div>

            <div class="form__input-group">
                <?php  if(isset($_GET['error'])) : ?>
                    <div class="form__message form__message_error">Invalid Password Confirm.</div>
                <?php endif ?>
                <input name="ConfirmPassword" type="password" class="form__input" placeholder="Confirm Password" required>
            </div>

            <textarea name="address" placeholder="Address"></textarea>

            <button class="form__button" type="submit">Continue</button>
       
            <p class="form__text">
                <a href="index.php" class="form__link" id="linklogin">Already have an account.SignUp</a>
            </p>
        </form>
    </div>
    <script src="main.js"></script>
</body>
</html>