
<link rel="stylesheet" href="minipro.css">

 <body style=" background-color:#33ffcc">
<?php

if(!empty($_POST["remember"])) {

	setcookie ("username",$_POST["username"],time()+ 3600);

	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "Cookies Set Successfuly";

} else {
	setcookie("username","");
	setcookie("password","");
}

if(isset($_COOKIE["username"])) 
{ 
echo $_COOKIE["username"]; 
}  

?>
<div class="addbk">
<a href="wishlist.php" style="text-decoration: none;color: black;background-color: #009999;justify-content: center" class="addbk"> Wishlist </a>&nbsp &nbsp &nbsp
<a href="genrepage.php" style="text-decoration: none;color: black;background-color: #009999" class="addbk"> View books </a> &nbsp &nbsp &nbsp
<a href="addphp.php" style="text-decoration: none;color: black;background-color: #009999"class="addbk" border-radius:10px> Add to wishlist </a> &nbsp &nbsp &nbsp
<a href="logout.php" style="text-decoration: none;color: black;background-color: #009999"class="addbk" > Logout </a> 

</div>
<h2 style="text-align: center">About us:</h2>
<p class="para"><i>A digital library, also known as an e-library, is a collection of documents in an organized digital form, available on the internet or on disks. The purpose of an e-library is to store, access, and manage magazine articles, books, audio files, images, and video files. In the case of e-libraries, various data can be merged easily, which helps keep information up-to-date.
E-libraries offer free copies of books and journals. There are various reasons for creating and using digital libraries. They offer a plethora of resources at your disposal. They also enable greater access to the content and can be managed from various locations.<br></i></p>
<h3><i>1.Variety of content</i></h3>
<p class="para"><i>Due to physical restraints, traditional libraries lacked the flexibility to include a diverse range of content. On the other hand, digital libraries are able to keep the books alive by also broadening the availability of the content online. It stores a wide range of content in a virtual environment in the form of e-books, PDFs, podcasts, and videos that can be updated and modified according to the user's needs. Unlike traditional libraries, which have physical constraints, e-libraries can be stored online on a cloud, drive, or hardware.<br></i></p>

<img src="https://www.nitinbang.com/wp-content/uploads/2018/06/digital-library.jpg" class=img>

<h3><i>2. Availability</h3></i>
<p class="para"><i>There's no better luxury than having access to knowledge and relevant information pertaining to specific subjects. E-libraries save a lot of time by drawing out relevant resources only through a simple search tab. In the case of a physical library or book, the same could have taken hours. Finding a book in a library can be like finding a needle in a pile of hay. Options like in-built content search options, a few keywords, and title suggestions, would help a user draw relevant resources from the vast range of material available online. Instant availability of these resources helps users save time, prioritize other tasks, and store the found resources for future use.<br></i></p>

<h3><i>3. Technological integration</h3></i>
<p class="para"><i>Since the world is gradually transitioning to digitization, it's important that students- the future generation, are introduced to technology in the early academic stages. They can adapt their skills to prepare them for technological changes. Ever since the COVID-19 outbreak, the usage of e-libraries has been emphasized as it has brought seamless access to reading and study materials with the use of e-libraries. Students not just have access to relevant resources but also gain technological education, which is beneficial in the long run.
Sources like Pearson E-library, offer interactive and top-notch quality learning content to students. They are easy to comprehend and are suitable for students of various academic years. This e-library comprises course books for various disciplines like engineering, humanities, social sciences, mathematics, etc.<br></i></p>

<h3><i>4. Preserve knowledge for future generations</h3></i>
<p class="para"><i>Physical storage devices like CDs, DVDs, cassette tapes, and even books and journals are prone to damage. Or, they can be discarded simply because they are not compatible with today's technologies. Due to this vulnerability, traditional libraries fail to preserve valuable research and studies for generations to come. But thanks to the wonders of the internet, it has become possible to store and access this valuable information on the Cloud, which keeps it a lot more secure. Furthermore, sophisticated security measures also ensure that only authentic users have access to it, so that the data present online isn't tampered with.<br></i></p>

<h3><i>5. Restores quality of information</h3></i>
<p class="para"><i>It costs a great amount of investment to preserve and conserve library resources in the traditional style. Since readers frequently access and reuse physical library resources, it can be very difficult to prevent the deterioration of books and other resources. Many organizations are moving to digitize their libraries in order to preserve the data and make it available to a large number of users on a consistent basis with minimized physical material preservation.<br></i></p>


