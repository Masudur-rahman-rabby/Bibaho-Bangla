<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
      body {
        color: rgb(83, 80, 80);
        font-size: 14px;
        align-items: center;
        background-color: #f1f1f0;
  
      }
      form {
  
        margin-left: 126px;
        margin-top:20px;
        margin-bottom: 50px; 
      }
  
      .profile-section {
        margin-bottom: 20px;
        display: inline-block;
        width: 75%;
        height: auto;
        background-color: white;
        margin-top: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        border-radius: 7px;
        padding: 10px 70px 20px 70px;
      }
      label {
        display: flex;
        width: auto;
        margin-bottom:3px;
      }
  
      
      input[type="text"] {
        border-width: 1px;
        font-size: 16px;
        text-align: left;
        height: 40px;
        width: 70%;
        border-radius: 5px;
        padding-left: 10px;
      }
      input[type="file"]{
          font-size: 16px;
        text-align: left;
        height: 40px;
        width: 70%;
        border-radius: 5px;
  
      }
      select {
        height: 40px;
        width: 70%;
        padding: 10px;
        border-radius: 5px;
      }
  
      input[type="submit"] {
        padding: 10px 20px;
        background-color: #242426;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
        border-radius: 5px;
      }
  
      input[type="submit"]:hover {
        opacity: 0.8;
        transition: 0.4s ease;
      }
      #profile_preview1 {
        align-items: center;
    max-width: 300px;
    max-height: 300px;
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
  
  }
  #profile_preview2 {
        align-items: center;
    max-width: 300px;
    max-height: 300px;
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
  
  }
  .floating-button {
          height: 55px;
        width: 55px;
            position: fixed;
            bottom: 30px; /* Adjust the bottom distance as per your preference */
            right: 40px; /* Adjust the right distance as per your preference */
            background-color: #2c1e7e; /* Set the background color of the button */
            color: #fff; /* Set the text color */
            padding: 15px 20px; /* Adjust the padding as per your button size */
            border-radius: 50%; /* Make the button round */
            text-decoration: none; /* Remove underline */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.8); /* Add a shadow effect */
            z-index: 9999; /* Ensure the button appears above other elements */
            transition: 0.6s ease;
        }
        .floating-button:hover {       
  opacity: 0.8; /* Reduce opacity on hover */
}

    </style>
  </head>
  
  
  
  <body> 
      <form action="/storys" method="post" enctype="multipart/form-data">
      @csrf
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
      <div class="profile-section">
        <p style="font-size: 24px; margin-bottom: 0px; margin-top: 20px;">#Story_Posting</p>
        <p>Post your beautiful love story here.</p><br><br><br>



        <div style="margin-bottom: 10px;">
          <label for="groom_picture">Picture of The Groom:</label>
          <input type="file" id="groom_picture" name="groom_picture" accept="image/*" onchange="previewPicture1(event)">
        </div>
        <div style="margin-bottom: 10px;">
          <img id="profile_preview1" name="profile_preview1"src="#" alt="Select a picture to see preview">
        </div>




        <div style="margin-bottom: 10px;">
            <label for="bride_picture">Picture of The Bride:</label>
            <input type="file" id="bride_picture" name="bride_picture" accept="image/*" onchange="previewPicture2(event)">
          </div>
          <div style="margin-bottom: 10px;">
            <img id="profile_preview2" name="profile_preview2"src="#" alt="Select a picture to see preview">
          </div><br><br>



    
        <div style="margin-bottom: 10px;">
          <label for="title">Title:</label>
          <input type="text" id="title" name="title">
        </div>
        <div style="margin-bottom: 10px;">
            <input type="text" id="story" name="story" placeholder="What's your story?">
          </div>
          <div style="margin-bottom: 20px;">
            <input type="submit" value="Save">
          </div>
      </div>  
    </form>
    <a href="{{ route('dashboard') }}"> <button class="floating-button"><img src="images/dashboard.png" alt="" style="height: 15px; width: 15px;"></button></a>
  
    <script>
      function previewPicture1(event) {
        var input = event.target;
        var preview = document.getElementById('profile_preview1');
        
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            preview.src = e.target.result;
          }
          reader.readAsDataURL(input.files[0]);
        }
      }

      function previewPicture2(event) {
        var input = event.target;
        var preview = document.getElementById('profile_preview2');
        
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            preview.src = e.target.result;
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>

  </body>
  