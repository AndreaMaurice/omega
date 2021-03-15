<!-- Search -->
<div class="text-dark">
        <div class="row p-5 mx-auto">
            <div class="row mx-auto">
                <div class="col-12 title text-center">
                    <h2 class="col-12">Let us explore the Bible!</h2>
                    <p>Instantly read your favorite verse here.</p>
                </div>
            </div>
            <div class="search-con col-10 bg-warning mx-auto py-3 px-5">
                <h3 class="mx-auto text-center text-white">Search for a verse</h3>
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
                                <input class="mx-1" type="number" max="176" min="1" name="versecount" placeholder="Verse">
                                <button type="submit" class="btn btn-light btn-sm mx-1" name="search">Submit</button>
                            </form>
            </div>
            <div class="results text-center">
                <?php 
                     include_once('sql-search.php');
                ?>
            </div>
            <div>
                

            </div>
        </div>
    </div>
