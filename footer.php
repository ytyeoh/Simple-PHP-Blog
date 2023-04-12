<p>
<div class="w3-container w3-teal">
    <p>All rights reserved | <?php echo date("Y"); ?></p>
</div>
</p>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js" integrity="sha512-YJgZG+6o3xSc0k5wv774GS+W1gx0vuSI/kr0E0UylL/Qg/noNspPtYwHPN9q6n59CTR/uhgXfjDXLTRI+uIryg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Import all plugins you want AFTER importing jQuery and Trumbowyg -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/plugins/upload/trumbowyg.upload.min.js" integrity="sha512-0Ax7SrxNwOb0s4mFVC5Vvn1wC6ts8ysma0OyNsXEXjygtnirRYF9Eg5Z1FPfXyoVRpsslvY/AQgoBY9u4sZKSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    $('#description')
      .trumbowyg({
          btnsDef: {
              // Create a new dropdown
              image: {
                  dropdown: ['insertImage', 'upload'],
                  ico: 'insertImage'
              }
          },
          // Redefine the button pane
          btns: [
              ['viewHTML'],
              ['formatting'],
              ['strong', 'em', 'del'],
              ['superscript', 'subscript'],
              ['link'],
              ['image'], // Our fresh created dropdown
              ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
              ['unorderedList', 'orderedList'],
              ['horizontalRule'],
              ['removeformat'],
              ['fullscreen']
          ],
          plugins: {
              // Add imagur parameters to upload plugin for demo purposes
              upload: {
                  serverPath: 'https://blog.breathelife.org.my/lki.php',
                  fileFieldName: 'image',
                  urlPropertyName: 'data.link'
              }
          }
    });
</script>

</body>