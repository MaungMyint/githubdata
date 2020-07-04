<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Profile</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



  <link href="{{asset('backend/css/mycss.css')}}" rel="stylesheet">
<link rel="stylesheet" href="css/profile.css">

  <style>
    /* Border Shadow in <hr> tag */
    hr.style-eight {
    height: 10px;
    border: 1;
    box-shadow: inset 0 9px 9px -3px rgba(11, 99, 184, 0.8);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    border-radius: 5px;
                }
  </style>

</head>
<div class="container">
<body style="background-image: url()">

    
    <div class="container-fluid col-lg-8 col-sm-4">

        <form method="POST" form-inline action="{{route('seekerprofile.update',$user->id)}}" enctype="multipart/form-data">

            @csrf  
            @method('PUT')
{{-- 
				<div class="form-group">


					<div class="form-file">

					<label class="fas text-info">Choose Your Profile</label>
	                    <input type="file" class="btn-info inputfile" name="your_picture" id="your_picture"  onchange="readURL(this);" data-multiple-caption="{count} files selected" multiple />
	                    <label for="your_picture">
                                <figure>
                                    @if($user->image == 'profilepic')
									<img src="{{ asset('storage/image/avatar.png') }}" 
									alt="" width="100" class="your_picture_image">
                                    @else
                                    <img src="{{ asset($user->image) }}" alt="" width="100" class="your_picture_image">
                                    @endif
                                    <input type="hidden" name="oldprofile" value="{{$user->image}}">
                                </figure>
                                  	                        
	                    </label>
	                </div>
        </div> --}}

        <div class="form-group">
					<div class="form-file">
				              <label for="your_picture">
                                <figure>
                                    @if($user->image == 'profilepic')
									<img src="{{ asset('storage/image/avatar.png') }}" 
									alt="" width="100" class="your_picture_image">
                                    @else
                                    <img src="{{ asset($user->image) }}" alt="" width="100" class="your_picture_image">
                                    @endif
                                    <input type="hidden" name="oldprofile" value="{{$user->image}}">
                                </figure>
                                  	                        
                      </label>
	                    <input type="file" class="btn-info inputfile" name="your_picture" id="your_picture"  onchange="readURL(this);" data-multiple-caption="{count} files selected" multiple />
                      
	                </div>
                </div>
                  <label>Name</label>
                 <input type="text" readonly class="form-control input-lg" name="name" value="{{ $user->name }}">
                 
                 <label>NRC</label>
                 <input type="text" name="nrc" readonly placeholder="NRC Number" autofocus value="{{ $user->nrc }}" class="form-control">

                 <label>Phone Number</label>


                 <input type="text" name="phone" placeholder="Phone Number" autofocus class="form-control" value="{{$user->phonenumber}}">

                 <label>E-mail</label>
                 <input type="text" name="email" readonly placeholder="Email" autofocus class="form-control" value="{{ $user->email }}">
                 <label>Address</label>
              <select name="address" id="edition" class="form-control" lable="choose Address" >
              <option selected="selected" >{{$user->address}}</option>
                  <option value="Ayeyarwady Region">Ayeyarwady Region</option>
                  <option value="Bago Region">Bago Region</option>
                  <option value="Chin State">Chin State</option>
                  <option value="Kachin State">Kachin State</option>
                  <option value="Kayah State">Kayah State</option>
                  <option value="Kayin State">Kayin State</option>
                  <option value="Magway Region">Magway Region</option>
                  <option value="Mandalay Region">Mandalay Region </option>
                  <option value="Mon State">Mon State</option>
                  <option value="Rakhine State">Rakhine State</option>
                  <option value="Sagaing Region">Sagaing Region</option>
                  <option value="Shan State">Shan State</option>
                  <option value="Tanintharyi Region">Tanintharyi Region</option>
                  <option value="Yangon Region">Yangon Region</option>
              </select>
           <label>Password</label>
            <input type="text" name="password" placeholder="Password" autofocus class="form-control" minlength="8" value="{{ $user->pass}}">

           <label>Degree</label>
            <input type="text" name="degree" placeholder="Degree" autofocus class="form-control" value="{{$user->degree}}">

           <label>Major</label>
           <input type="text" name="major" placeholder="Major" autofocus class="form-control" value="{{$user->major}}">

        
           <label>Training</label>
           <input type="text" name="training" placeholder="Training" autofocus class="form-control" value="{{$user->training}}">

           <label>Course</label>
           <select name="course" id="edition" class="form-control" lable="choose Address" >
           <option selected="selected" >{{$user->course}}</option>
            <option value="php">php</option>
            <option value="java">java</option>
            <option value="Microsoft">Microsoft</option>
            <option value="Window">Window</option>
            <option value="Linux">Linux</option>
          
           </select>
           
           <label>Division/State</label>
           <select name="division" id="edition" class="form-control" lable="Choose  Division" >
           <option selected="selected" >{{$user->state}}</option>
           <option value="Ayeyarwady Region">Ayeyarwady Region</option>
           <option value="Bago Region">Bago Region</option>
           <option value="Chin State">Chin State</option>
           <option value="Kachin State">Kachin State</option>
           <option value="Kayah State">Kayah State</option>
           <option value="Kayin State">Kayin State</option>
           <option value="Magway Region">Magway Region</option>
           <option value="Mandalay Region">Mandalay Region </option>
           <option value="Mon State">Mon State</option>
           <option value="Rakhine State">Rakhine State</option>
           <option value="Sagaing Region">Sagaing Region</option>
           <option value="Shan State">Shan State</option>
           <option value="Tanintharyi Region">Tanintharyi Region</option>
           <option value="Yangon Region">Yangon Region</option>
          </select>

           <label>University</label>
                 <select name="university" id="edition" class="form-control" lable="choose Address" >
                 <option selected="selected">{{$user->university}}</option>
                  <option value="Technological University">Technological University</option>
                  <option value="Computer university">Computer university</option>
                  <option value="others">Others</option>
           </select>

           <label>Job</label>
                 <select name="job" id="edition" class="form-control" lable="choose Address" >
                 <option selected="selected" >{{$user->staff}}</option>
                  <option value="Goverment Staff">Goverment Staff</option>
                  <option value="Student">Student</option>
                  <option value="others">Others</option>
           </select>
           <label>Job Position</label>
                 <select name="position" id="edition" class="form-control" lable="choose Address" >
                 <option selected="selected" >{{$user->jobposition}}</option>
                  <optgroup label="Management">
                     <option value="Project Manager">Project Manager</option>
                     <option value="Database Manager">Database Manager</option>
                     <option value="IT Executive">IT Executive</option>
                     <option value="IT Director">IT Director</option>
                     <option value="IT Assitant Manager">IT Assitant Manager</option>
                     <option value="IT Department Head">IT Department Head</option>
                     <option value="IT Administrative Associate">IT Administrative Associate</option>
                     <option value="Network System Manager">Network System Manager</option>
                     <option value="IT Manager">IT Manager</option>
                     <option value="EDP Manager">EDP Manager</option>
                     <option value="System Manager">System Manager</option>
                     <option value="Training Manager">Training Manager</option>
                     <option value="Project Leader">Project Leader</option>
                     <option value="Team Leader">Team Leader</option>
                     <option value="Senior Executive">Senior Executive</option>
                     <option value="IT Security and Compliance Manager">IT Security and Compliance Manager</option>
                     <option value="Database  Administrator">Database  Administrator</option>
                     <option value="Vice President(IT)">Vice President(IT)</option>
                     <option value="Vice President(Information Service)">Vice President(Information Service)</option>
                     <option value="Chief Information Officer(CIO)">Chief Information Officer(CIO)</option>
                     <option value="Chief Technicial Officer(CTO)">Chief Technicial Officer(CTO)</option>
                     <option value="Chief Security Officer(CSO)">Chief Security Officer(CSO)</option>
                     <option value="Technical Director">Technical Director</option>
                     <option value="IT/IS Director">IT/IS Director</option>
                     <option value="IT Project Director">IT Project Director</option>
                   </optgroup>
                   <optgroup label="Programmer">
                     <option value="IOS Developer">IOS Developer</option>
                     <option value="PHP Programmer">PHP Programmer</option>
                     <option value="Senior Programmer">Senior Programmer</option>
                     <option value="Software Developer">Software Developer</option>
                     <option value="Android Developer">Android Developer</option>
                     <option value="Application Developer">Application Developer</option>
                     <option value="IT Software Support Enginner">IT Software Support Enginner</option>
                     <option value="Junior Programmer">Junior Programmer</option>
                     <option value="IT Application Engineer">IT Application Engineer</option>
                     <option value="Mobile Application  Developer">Mobile Application  Developer</option>
                     <option value="Programmer">Programmer</option>
                     <option value="Analyst Programmer">Analyst Programmer</option>
                     <option value="Web Developer">Web Developer</option>
                   </optgroup><optgroup label="Networking">
                     <option value="Networking">Networking</option>
                     <option value="IT Infrasturcture Engieer ">IT Infrasturcture Engieer </option>
                     <option value="Network Administration & Security Unit Officer">Network Administration & Security Unit Officer</option>
                     <option value="Network Technician">Network Technician</option>
                   </optgroup>
                    </optgroup><optgroup label="Digital Marketing">
                     <option value="IT Sales and Marketing">IT Sales and Marketing</option>
                   </optgroup>

               
           </select>

            <label>Job Location</label>
                 <select name="location" id="edition" class="form-control" lable="choose Address" >
                 <option selected="selected" >{{$user->joblocation}}</option>
                 <option value="Ayeyarwady Region">Ayeyarwady Region</option>
                 <option value="Bago Region">Bago Region</option>
                 <option value="Chin State">Chin State</option>
                 <option value="Kachin State">Kachin State</option>
                 <option value="Kayah State">Kayah State</option>
                 <option value="Kayin State">Kayin State</option>
                 <option value="Magway Region">Magway Region</option>
                 <option value="Mandalay Region">Mandalay Region </option>
                 <option value="Mon State">Mon State</option>
                 <option value="Rakhine State">Rakhine State</option>
                 <option value="Sagaing Region">Sagaing Region</option>
                 <option value="Shan State">Shan State</option>
                 <option value="Tanintharyi Region">Tanintharyi Region</option>
                 <option value="Yangon Region">Yangon Region</option>
                 </select>

           <label>Salary Rang</label>
                 <select name="slary" id="edition" class="form-control" lable="choice slary" >
                 <option selected="selected" >{{$user->slary}}</option>
                  <option value="100000-200000">100000-200000</option>
                  <option value="200000-300000">200000-300000</option>
                  <option value="300000-400000">300000-400000</option>
                  <option value="400000-500000">400000-500000</option>
                  <option value="500000-600000">500000-600000</option>
                  <option value="600000-700000">600000-700000</option>
                  <option value="700000-800000">700000-800000</option>
                  <option value="800000-900000">800000-900000</option>
                  <option value="900000-1000000">900000-1000000</option>
                  <option value="1000000 above ">1000000 above</option>
           </select>


                
                <hr>
                <center>
                <input type="submit" class="btn btn-primary btn-sm btn-block float" value="Update">
                </center>
</form>

<hr class="style-eight" />
<hr><hr>

<script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>
<script src="{{asset('backend/js/myjs.js')}}"></script>
@yield('script')

</body>
</html>



