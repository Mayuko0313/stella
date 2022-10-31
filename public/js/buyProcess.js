(function() {
    'use strict';

    window.addEventListener('load', function() {
      // Bootstrapカスタム検証スタイルを適用してすべてのフォームを取得
      var forms = document.getElementsByClassName('needs-validation');

      // ループして帰順を防ぐ
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
