<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link rel="stylesheet" href="{{asset('css/Adminstrauetr_CSS/login_admin.css')}}">
  <style>

  </style>
</head>
<body>
      <div class="login">
        <img src="{{asset('img/login-bg.png')}}" alt="login image" class="login__img">

        <form action="{{route('login.admin')}}" method="POST" class="login__form">
            @if (Session::has('success'))
            <div class="botton-text alert alert-success"> {{Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
            <div class="botton-text alert alert-danger"> {{Session::get('fail') }}</div>
            @endif
            @csrf
          <h1 class="login__title">Connexion Administrateur</h1>

          <div class="login__content">
            <div class="login__box">
              <i class="bx bx-lock-alt"></i>

              <div class="login__box-input">
                <input type="email" required class="login__input" name="email" placeholder="">
                <label for="" class="login__label">Email</label>
              </div>
            </div>

            <div class="login__box">
              <i class="ri-lock-2-line login__icon"></i>


              <div class="login__box-input">
                <input type="password" required class="login__input" id="login-pas" name="password" placeholder="">
                <label for="" class="login__label">Password</label>
                <i class="ri-eye-off-line login__eye"></i>
               </div>
            </div>
          </div>

          <div class="login__check">
            <div class="login__check-group">
              <input type="checkbox" class="login__check-input">
              <label for="" class="login__check-label">Se souvenir de moi</label>
            </div>

              <a href="#" class="login__forgot">Mots de page oublié</a>
          </div>

          <button type="submit" class="login__button">Connexion</button>

          <p class="login__register">
            Don't have an account? <a href="#">Register</a>
          </p>
        </form>
      </div>

      <!--<============ Main Js ============-->

      <script>/*--================== Show Hidden - Password =================*/
        const showHiddenPass = (loginPass, LoginEye) =>{
        const input = document.getElementById(loginPass),
        iconEye = document.getElementById(LoginEye)

        iconEye.addEventListener('click', () =>{
          //change password to text
          if(input.type === 'password'){
            //switch to text
            input.type = 'text'

            //Icon chnage
            iconEye.classList.add('ri-eye-line')
            iconEye.classList.remove('ri-eye-off-line')
          } else{

            //change to password
            input.type ='password'


            //Icon change
            iconEye.classList.remove('ri-eye-line')
            iconEye.classList.add('ri-eye-off-line')

          }
        })
      }

      showHiddenPass('login-pass',' login-eye')</script>
</body>
</html>
