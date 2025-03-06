<doctype html>
    <html lane="en">
        <head>
            <meta charset="UTF-8">
            <meta name="reyad" content="this is our first page in php">
            <link rel="Stylesheet" href="form.css">
        </head>
        <body>
         <form method="POST" action="">
            <div class="form-container">
                <form class="form">
                  <div class="form-group">
                    <label for="email">Company Email</label>
                    <input type="text" id="email" name="email" required="">
                  </div>
                  <div class="form-group">
                    <label for="textarea">How Can We Help You?</label>
                    <textarea name="textarea" id="textarea" rows="10" cols="50" required="">          </textarea>
                  </div>
                  <button class="form-submit-btn" type="submit">Submit</button>
                </form>
              </div>
         </form>
        </body>
    </html>
</doctype>