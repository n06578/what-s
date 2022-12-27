<?

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>What's login</title>
    <script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/neumorphic-login.css">
    <link rel="stylesheet" type="text/css" href="css/index.css?v=<?=time()?>">
  </head>
  <body>
    <section class="hero is-fullheight">
      <div class="hero-body has-text-centered">
        <div class="login">
            <image src="style/logo2.png" class="ccustom" />
          <form action="login_ok.php">
            <div class="field">
              <div class="control">
                <input class="input is-medium is-rounded" type="text"id="id" name="id" placeholder="아이디" /> 
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input class="input is-medium is-rounded" type="password" placeholder="password" id="password" name="password" />
              </div>
            </div>
            <br />
            <button class="button is-block is-fullwidth is-primary is-medium is-rounded" type="submit" id="submit" class="submit" >
              Login
            </button>
          </form>
          <br>
          <nav class="level">
            <div class="level-item has-text-centered">
              <div>
                <a href="#">Forgot Password?</a>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <a class="js-modal-trigger" data-target="modal-js-example"></a>Create an Account</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </section>
  </body>

</html>
<?
include "/etc/create.php";
?>
<script>
    $(".submit").click(function(e){
        if ($("#id").val()=="") {
			alert("아이디를 입력하세요.");
			$("#id").focus();
			return false;
		}

		if ($("#password").val()=="") {
			alert("비밀번호를 입력하세요.");
			$("#password").focus();
			return false;
		}
        form.submit();
    });


    document.addEventListener('DOMContentLoaded', () => {
  // Functions to open and close a modal
  function openModal($el) {
    $el.classList.add('is-active');
  }

  function closeModal($el) {
    $el.classList.remove('is-active');
  }

  function closeAllModals() {
    (document.querySelectorAll('.modal') || []).forEach(($modal) => {
      closeModal($modal);
    });
  }

  // Add a click event on buttons to open a specific modal
  (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
    const modal = $trigger.dataset.target;
    const $target = document.getElementById(modal);

    $trigger.addEventListener('click', () => {
      openModal($target);
    });
  });

  // Add a click event on various child elements to close the parent modal
  (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
    const $target = $close.closest('.modal');

    $close.addEventListener('click', () => {
      closeModal($target);
    });
  });

  // Add a keyboard event to close all modals
  document.addEventListener('keydown', (event) => {
    const e = event || window.event;

    if (e.keyCode === 27) { // Escape key
      closeAllModals();
    }
  });
});
</script>