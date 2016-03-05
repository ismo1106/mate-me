<html>
    <head>
        <?php echo $_header; ?>
    </head>
    <body>
        <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded mdl-layout--fixed-header">
            <main class="mdl-layout__content">
                <?php echo $_content; ?>

                <?php echo $_footer; ?>
            </main>
            <div class="mdl-layout__obfuscator"></div>
        </div>

        <?php echo $_footjs; ?>
        
    </body>
    <script>
        Array.prototype.forEach.call(document.querySelectorAll('.mdl-card__media'), function (el) {
            var link = el.querySelector('a');
            if (!link) {
                return;
            }
            var target = link.getAttribute('href');
            if (!target) {
                return;
            }
            el.addEventListener('click', function () {
                location.href = target;
            });
        });
    </script>
    
</html>