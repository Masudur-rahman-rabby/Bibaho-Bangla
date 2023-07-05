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

    .partner-section {
      display: inline-block;
      width: 75%;
      height: auto;
      background-color: white;
      margin-top: 10px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
      border-radius: 7px;
      padding: 10px 70px 10px 70px;
    }

    label {
      display: flex;
      width: auto;
      margin-bottom:3px;
    }

    
    input[type="text"],
    input[type="number"] {
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
    #profile_preview {
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

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Set Your Biodata') }}
        </h2>
        </x-slot>

    <form action="/biodatas" method="post" enctype="multipart/form-data">
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
      <p style="font-size: 24px; margin-bottom: 0px; margin-top: 20px;">Profile details</p>
      <p>Give your additional profile information to be searched by people.</p><br><br><br>
      <div style="margin-bottom: 10px;">
        <label for="profile_picture">Profile Picture:</label>
        <input type="file" id="profile_picture" name="profile_picture" accept="image/*" onchange="previewPicture(event)">
      </div>
      <div style="margin-bottom: 10px;">
        <img id="profile_preview" name="profile_preview"src="#" alt="Select a profile picture to see preview">
      </div>
  
      <div style="margin-bottom: 10px;">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
      </div>
  
      <div style="margin-bottom: 10px;">
        <label for="age">Age:</label>
        <input type="text" id="age" name="age">
      </div>

      <div style="margin-bottom: 30px;">
        <label for="gender">Your Gender:</label>
        <select id="gender" name="gender">
          <option value="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="others">Others</option>
        </select>
      </div>


      <div style="margin-bottom: 10px;">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone">
      </div>

  
      <div style="margin-bottom: 10px;">
        <label for="religion">Religion:</label>
        <select id="religion" name="religion">
          <option value="">Select Religion</option>
          <option value="hindu">Hindu</option>
          <option value="muslim">Muslim</option>
          <option value="christian">Christian</option>
          <option value="buddhist">Buddhist</option>
          <option value="other">Other</option>
        </select>
      </div>
  
      <div style="margin-bottom: 30px;">
        <label for="cast">Cast:</label>
        <select id="cast" name="cast">
          <option value="">Select Cast</option>
          <option value="syed">Syed</option>
          <option value="sheikh">Sheikh</option>
          <option value="pathan">Pathan</option>
          <option value="ansari">Ansari</option>
          <option value="sunni">Sunni</option>
          <option value="sia">Sia</option>
          <option value="lama">Lama</option>
          <option value="shepra">Shepra</option>
          <option value="tamang">Tamang</option>
          <option value="rai">Rai</option>
          <option value="bhramin">Bhramin</option>
          <option value="rajput">Rajput</option>
          <option value="jat">Jat</option>
          <option value="panjabi">Panjabi</option>
          <option value="baniya">Baniya</option>
          <option value="smith">Smith</option>
          <option value="brown">Brown</option>
          <option value="padri">Padri</option>
        </select>
      </div>
  

    </div>


    <div class="partner-section">
      <p style="font-size: 24px; margin-bottom: 0px; margin-top: 20px;">Partner Preferences</p>
      <p>To find your partner give your partner preferences here.</p>
      <br><br><br>
      <div style="margin-bottom: 30px;">
        <label for="interested_in">Interested in:</label>
        <select id="interested_in" name="interested_in">
          <option value="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="others">Others</option>
        </select>
      </div>
      <div style="margin-bottom: 10px;">
        <label for="age_preference">Age Preference:</label>
        <select id="age_preference" name="age_preference">
          <option value="">Select Age</option>
          <option value="18-25">18-25</option>
          <option value="26-35">26-35</option>
          <option value="36-45">36-45</option>
          <option value="46+">46+</option>
        </select>
      </div>

      <div style="margin-bottom: 10px;">
        <label for="religion_preference">Religion Preference:</label>
        <select id="religion_preference" name="religion_preference">
          <option value="">Select Religion</option>
          <option value="hindu">Hindu</option>
          <option value="muslim">Muslim</option>
          <option value="christian">Christian</option>
          <option value="buddhist">Buddhist</option>
          <option value="other">Other</option>
        </select>
      </div>

      <div style="margin-bottom: 30px;">
        <label for="cast_preference">Cast Preference:</label>
        <select id="cast_preference" name="cast_preference">
          <option value="">Select Cast</option>
          <option value="syed">Syed</option>
          <option value="sheikh">Sheikh</option>
          <option value="pathan">Pathan</option>
          <option value="ansari">Ansari</option>
          <option value="sunni">Sunni</option>
          <option value="sia">Sia</option>
          <option value="lama">Lama</option>
          <option value="shepra">Shepra</option>
          <option value="tamang">Tamang</option>
          <option value="rai">Rai</option>
          <option value="bhramin">Bhramin</option>
          <option value="rajput">Rajput</option>
          <option value="jat">Jat</option>
          <option value="panjabi">Panjabi</option>
          <option value="baniya">Baniya</option>
          <option value="smith">Smith</option>
          <option value="brown">Brown</option>
          <option value="padri">Padri</option>
        </select>
      </div>
      <div style="margin-bottom: 20px;">
        <input type="submit" value="Save">
      </div>

    </div>


  </form>

  <a href="{{ route('welcome') }}"> <button class="floating-button"><img src="images/home.png" alt="" style="height: 15px; width: 15px;"></button></a>


  <script>
    function previewPicture(event) {
      var input = event.target;
      var preview = document.getElementById('profile_preview');
      
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          preview.src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

</x-app-layout>
</body>
