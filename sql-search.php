<?php
	include_once('connect.php');

 if(isset($_POST['search']))
{
		   // things to search
			$book = $_POST['book'];
			$chapter = $_POST['chapter'];
			$versecount = $_POST['versecount']; 
			
			// mysql search query
			// $query = "SELECT * FROM `bible` WHERE Book = .$book. AND Chapter = .$chapter. AND Versecount = .$versecount.";
			// $result = mysql_query($conn, $query);

			$query = mysqli_query($conn, "SELECT * FROM bible WHERE Book = '".$book."' AND Chapter = '".$chapter."' AND Versecount = '".$versecount."'") or die (mysqli_error($conn));
			// $resultrows = mysql_num_rows($query);
		// while ($row = mysqli_fetch_array($query)) {
		// 	echo
		// 	"<tr>
		// 	<td>{$row['reviewer_name']}</td>
		// 	<td>{$row['star_rating']}</td>
		// 	<td>{$row['details']}</td>
		// 	</tr>;"
		// }
		// if it exist 
		// show data in inputs
		// if($resultrows > 0){
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
				echo "<div> <h3>". $book[$row['Book']] . " " . $chapter . " : " . $versecount. " ". "</h3> <p>". $verse ."</p></div>";
				
			}
			
		}
?>
