<?php 
include_once('connect.php');
include_once('in-head.php');
?>
<div class="main" style="max-height: 75vh;">
<?php
include_once('out-nav.php');
?>
    <!-- Search -->
    <div class="chapters"> 
    
        <div class="row mx-auto">
            <div class="col-12 title">
                <h2 class="text-center mb-5 text-white">Let us explore the Bible!</h2>
            </div>
        </div>
    
        <div class="search-con col-10 bg-warning mx-auto py-3 px-5">
                <h3 class="mx-auto text-center text-light">Search for the Book and Chapter</h3>
                <p class="mx-auto text-center text-light">Read and be enlightened with God's words</p>
                <div class="row mx-auto">
                    <!-- Search Form -->
                    <form class="search mx-auto text-dark m-3" action="" method="POST">
                            <select class="form-select text-dark mx-1" aria-label="Default select example" name="book">
                            <option selected disabled>Choose a book</option> 
                            <option value="0">Genesis</option> 
                            <option value="1">Exodus</option> 
                            <option value="2">Leviticus</option> 
                            <option value="3">Numbers</option> 
                            <option value="4">Deuteronomy</option> 
                            <option value="5">Joshua</option> 
                            <option value="6">Judges</option> 
                            <option value="7">Ruth</option> 
                            <option value="8">1 Samuel</option> 
                            <option value="9">2 Samuel</option> 
                            <option value="10">1 Kings</option> 
                            <option value="11">2 Kings</option> 
                            <option value="12">1 Chronicles</option> 
                            <option value="13">2 Chronicles</option> 
                            <option value="14">Ezra</option> 
                            <option value="15">Nehemiah</option> 
                            <option value="16">Esther</option> 
                            <option value="17">Job</option> 
                            <option value="18">Psalms</option> 
                            <option value="19">Proverbs</option> 
                            <option value="20">Ecclesiastes</option> 
                            <option value="21">Song of Solomon</option> 
                            <option value="22">Isaiah</option> 
                            <option value="23">Jeremiah</option> 
                            <option value="24">Lamentations</option> 
                            <option value="25">Ezekiel</option> 
                            <option value="26">Daniel</option> 
                            <option value="27">Hosea</option> 
                            <option value="28">Joel</option> 
                            <option value="29">Amos</option> 
                            <option value="30">Obadiah</option> 
                            <option value="31">Jonah</option> 
                            <option value="32">Micah</option> 
                            <option value="33">Nahum</option> 
                            <option value="34">Habakkuk</option> 
                            <option value="35">Zephaniah</option> 
                            <option value="36">Haggai</option> 
                            <option value="37">Zechariah</option> 
                            <option value="38">Malachi</option> 
                            <option disabled></option> 
                            <option value="39">Matthew</option> 
                            <option value="40">Mark</option> 
                            <option value="41">Luke</option> 
                            <option value="42">John</option> 
                            <option value="43">Acts</option> 
                            <option value="44">Romans</option> 
                            <option value="45">1 Corinthians</option> 
                            <option value="46">2 Corinthians</option> 
                            <option value="47">Galatians</option> 
                            <option value="48">Ephesians</option> 
                            <option value="49">Philippians</option> 
                            <option value="50">Colossians</option> 
                            <option value="51">1 Thessalonians</option> 
                            <option value="52">2 Thessalonians</option> 
                            <option value="53">1 Timothy</option> 
                            <option value="54">2 Timothy</option> 
                            <option value="55">Titus</option> 
                            <option value="56">Philemon</option> 
                            <option value="57">Hebrews</option> 
                            <option value="58">James</option> 
                            <option value="59">1 Peter</option> 
                            <option value="60">2 Peter</option> 
                            <option value="61">1 John</option> 
                            <option value="62">2 John</option> 
                            <option value="63">3 John</option> 
                            <option value="64">Jude</option> 
                            <option value="65">Revelation</option> 
                        </select>
                        <input class="mx-1" type="number" max="150" min="1" name="chapter" placeholder="Chapter">
                        <button type="submit" class="search-btn btn btn-light btn-sm mx-1" name="search">Submit</button>
                    </form>
                </div>
        </div>
    </div>
    <div class="read text-center px-5" style="margin-top: 40px !important;">
            <div class="m-5 p-5"  style="margin-inline: 200px !important;">
            <?php 
                     if(isset($_POST['search']))
                     {
                    // things to search
                        $book = $_POST['book'];
                        $chapter = $_POST['chapter'];
                        
                        // sql query search
                        $query = mysqli_query($conn, "SELECT * FROM bible WHERE Book = '".$book."' AND Chapter = '".$chapter."'") or die (mysqli_error($conn));
                        
                            while ($row = mysqli_fetch_array($query)){
                            $book = array("Genesis",
                            "Exodus",
                            "Leviticus",
                            "Numbers",
                            "Deuteronomy",
                            "Joshua",
                            "Judges",
                            "Ruth",
                            "1 Samuel",
                            "2 Samuel",
                            "1 Kings",
                            "2 Kings",
                            "1 Chronicles",
                            "2 Chronicles",
                            "Ezra",
                            "Nehemiah",
                            "Esther",
                            "Job",
                            "Psalms",
                            "Proverbs",
                            "Ecclesiastes",
                            "Song of Solomon",
                            "Isaiah",
                            "Jeremiah",
                            "Lamentations",
                            "Ezekiel",
                            "Daniel",
                            "Hosea",
                            "Joel",
                            "Amos",
                            "Obadiah",
                            "Jonah",
                            "Micah",
                            "Nahum",
                            "Habakkuk",
                            "Zephaniah",
                            "Haggai",
                            "Zechariah",
                            "Malachi",
                            "Matthew",
                            "Mark",
                            "Luke",
                            "John",
                            "Acts",
                            "Romans",
                            "1 Corinthians",
                            "2 Corinthians",
                            "Galatians",
                            "Ephesians",
                            "Philippians",
                            "Colossians",
                            "1 Thessalonians",
                            "2 Thessalonians",
                            "1 Timothy",
                            "2 Timothy",
                            "Titus",
                            "Philemon",
                            "Hebrews",
                            "James",
                            "1 Peter",
                            "2 Peter",
                            "1 John",
                            "2 John",
                            "3 John",
                            "Jude",
                            "Revelation");
            
                            $chapter = $row['Chapter'];
                            $versecount = $row['Versecount'];
                            $verse = $row['verse'];
                            echo "<div> <h6>". $book[$row['Book']] . " " . $chapter . " : " . $versecount. " ". "</h6> <p>". $verse ."</p></div>";
                            
                        }
                        
                    }
                ?>
            </div>
        </div>

<!-- Footer -->
<div class="foot-bot bg-dark p-5 mx-auto">
        <div class="row mx-auto">
            <div class="logo mx-auto">
                <img src="./assets/Omega_DigiBible_Logo-1536x1509.png" alt="" width="200">
            </div>
            <div class="foot-menu mx-auto my-auto">    
                <h4 class="mx-auto text-warning">MENU</h4>
                <div class="foot-links mx-auto mt-4">
                    <a href="index.php">Home</a>
                </div>
                <div class="foot-links mx-auto">
                    <a href="about.php">About Us</a>
                </div>
                <div class="foot-links mx-auto">
                    <a href="books.php">Read the Bible</a>
                </div>
            </div>
            <div class="contacts mx-auto mx-5 text-warning">            
                <h4>FOLLOW US ON:</h4>
                <div class="link-icons">
                    <a href="https://www.facebook.com/OmegaDigiBible" target="_blank"> 
                        <img src="./assets/Facebook.png" alt="">
                    </a>
                    <a href="https://www.instagram.com/omegadigibible/" target="_blank">
                        <img src="./assets/Instagram.png" alt="">
                    </a>
                    <a href="https://twitter.com/omegadigibible/" target="_blank">
                        <img src="./assets/Twitter.png" alt="">
                    </a>
                    <a href="https://www.youtube.com/channel/UCnyCtXfuUQEG1ggP6eKk2Eg/featured" target="_blank">
                        <img src="./assets/Youtube.png" alt="">
                    </a>
                </div>
                <div class="link-text mt-3">
                    <p>
                    Email: 
                    info@vsionteq.com<br>
                    support@omegadigibible.com<br>
                    Phone: 
                    +63 929 110 7714
                    </p>
                </div>
            </div>
        </div>  
    </div> 

<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- End Main -->
<div>
</body>
</html>
