<?php if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ): ?>
    <?php
        include( 'ckeditor_php5.php' );

        $ckeditor = new CKEditor();
        $ckeditor->editor( $_POST[ 'id' ], 'This is my initial value!', array(
            'height' => '300'   // Config to be used
        ));
    ?>
<?php else: ?>

    <!DOCTYPE html>
    <html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    </head>
    <body>
        <div id="mydiv" style="outline: 2px dashed orange; padding: 20px; margin: 0 0 20px;">
            This is where the editor will be loaded.
        </div>
        <button id="load" type="submit">Load the editor via AJAX!</button>
        <script>

            (function( $ ) {
                var id = 'idOfTheEditor';

                $( '#load' ).on( 'click', function() {
                    $.ajax({
                        type: 'POST',
                        url: 'index.php',
                        data: {
                            id: id
                        },
                        error: function(){
                            console.log( 'Error?' );
                        },
                        success: function( data ) {
                            if ( window.CKEDITOR && CKEDITOR.instances[ id ] ) {
                                console.log( 'Desytroying an existing instance!' );
                                CKEDITOR.instances[ id ].destroy();
                            }
                            $( '#mydiv' ).html( data );
                        }
                    });
                });

            })( jQuery );

        </script>
    </body>
    </html>
<?php endif ?>
You can eventually wrap $( '#mydiv' ).html( data ) in setTimeout closure like this to see your code working in "slo
