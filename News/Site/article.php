<?php
require_once 'classes/Connection.php';
require_once 'classes/Story.php';
require_once 'classes/Util.php';

try {
    $stories = stories::selectAll();
 
}
catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>

<!DOCTYPE htnl>
<html>

<head>
    |
    <meta charset="utf-8">
    <title>Form Article</title>
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Merriweather:300i,400,700,900|Montserrat:300i,400,600,700,900" rel="stylesheet">
</head>

<body>

    <div class="fullblack">
        <div class="container">

            <div class="twelve">
                    <h1 class="color">The New Yorker</h1>
            </div>

            <div class="clear"></div>

        </div>
    </div>
    <!--        //////////////////Row 1///////////////////-->

    <div class="container">
        <div class="twelve">
            <div class="twelve alpha omega">
                <h2 class="bigHeadline">Inmates and staff at women’s prison in ‘inappropriate relationships’</h2>
            </div>

            <!--        //////////////////Row 2///////////////////-->

            <div class="twelve alpha omega">
                <h4 class="subHeading">Report refers to allegations at Dóchas centre on Mountjoy campus in Dublin</h4>
            </div>
        </div>

        <!--        //////////////////Row 3///////////////////-->

        <div class="six">
            <div class="six alpha omega">
                <p class="date">Wed, Mar 13, 2019, 09:47</p>
            </div>

            <!--        //////////////////Row 4///////////////////-->

            <div class="six alpha omega">
                <p class="authorInfo marginBottom">Written by <a href="https://www.irishtimes.com/profile/gordon-deegan-7.1837475">Gordon Deegan</a></p>
            </div>
        </div>

        <!--        //////////////////Row 5///////////////////-->

        <div class="twelve">
            <div class="nine alpha omega marginBottom">
                <p class="story">
                    A new report published by the Department of Justice refers to allegations of “inappropriate relationships” between some women inmates at the Dóchas women’s prison in Dublin “and a small number of male staff”.</p>
                <!--        //////////////////Row 6///////////////////-->

                <p class="story">The allegations are contained in an annual report for 2017 by the Visiting Committee for the State’s only dedicated women’s prison, on the Mountjoy campus.</p>
                <!--        //////////////////Row 7///////////////////-->
            </div>
        </div>

        <div class="twelve alpha omega marginBottom">
            <p class="quote"><span class="quoteMarks">“</span>Allegations have come to our attention of inappropriate relationships between some women and a small number of male staff <span class="quoteMarks">”</span> <span class="reporter"> - states the reporter</span></p>
        </div>

        <div class="twelve">
            <div class="nine alpha omega marginBottom">
                <div class="five alpha">
                    <p class="story">
                        On allegations against Dóchas staff, the authors state that “if it is found that the behaviour of any prison officer, male or female, towards these women does not measure up to the highest professional standards demanded there is a clear duty on management, the Prison Service or other appropriate agency to take the necessary action”.</p>

                    <p class="story">Pointing out that the female inmates at Dóchas “are among the most vulnerable cohort in society”, the <br> authors state that “if the appropriate action is not taken or is inadequate, something is radically wrong”.
                        The authors state that where an allegation of inappropriate conduct is made against prison staff “we believe that as a matter of course these investigations should be conducted by external investigators who are unconnected with the prison service”.</p>
                </div>

                <div class="four omega">
                    <p class="story">The publication of the report follows the Irish Prison Service launching a investigation in November 2017 into suspicions that 34-year-old so-called ‘Scissor Sister’ Charlotte Mulhall was involved in an inappropriate relationship with a staff member.
                        Mulhall was jailed along with her sister Linda for killing their mother’s partner, Kenyan Farah Swaleh Noor, in 2005.</p>

                    <p class="story">Elsewhere in the report, the authors criticise the continued over-crowding at the Dóchas centre.
                        They state that “the numbers in Dóchas continue to rise and have reached well into the 130s during 2017. With a total capacity of 105, this is unacceptable over-crowding and a very serious strain on resources.</p><br>
                </div>

                <p class="story">It forces ‘doubling-up’, the use of bunk beds in small rooms and the use of recreation rooms as sleeping quarters often with four beds to a room”.</p>
            </div>
        </div>

        <div class="twelve alpha omega marginBottom">
            <p class="quote"><span class="quoteMarks">“</span>Management have tried to alleviate the worst consequences of this problem. It remains unresolved and leads to disruption, behavioural problems and serious discontent.<span class="quoteMarks">”</span> </p>
        </div>

        <div class="twelve">
            <div class="nine alpha omega marginBottom">
                <p class="story">
                    The authors of the report also say Dóchas requires urgent works to the building stating that the centre is in need of an urgent upgrade.</p>

                <p class="story">They say “it continues to be a matter of concern that despite constant monitoring, drugs remain a serious problem within Dóchas”.</p>

                <p class="story">“We are aware that this is pervasive across the prison system. We fully understand that the problem of supply is difficult to monitor but we would urge that more resources are made available to curb this on-going and very serious issue.”</p>

                <p class="story">On the allegations of inappropriate relationships between women prisoners and a small number of male staff at Dóchas, a spokesman for the Prison Officers Association (POA) said that it is POA policy not to make any comment on such matters where disciplinary processes may be ongoing.</p>

                <p class="story marginBottom">The Irish Prison Service has been asked to comment on the contents of the Visiting Committee report.</p>
            </div>
        </div>

    </div>

    <div class="fullgray">
        <div class="container">
            <div class="twelve">
                <div class="five alpha color ">
                    <h3>Author Information</h3>
                    <h4 class="subHeading">Name: Gordon Deegan</h4>
                    <h4 class="subHeading">Link: <a href="https://www.irishtimes.com/profile/gordon-deegan-7.1837475">Irish times</a></h4>
                    <p class="colorBottomLine"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="twelve">
            <div class="five alpha">
                <h3>Trending Stories</h3>
            </div>
        </div>

        <div class="twelve">
            <div class="four marginBottom alpha">
                <div class="four bottomLine alpha omega">
                    <h3>Cancer patients are missing chemo slots ‘due to lack of hospital beds’</h3>
                </div>

                <div class="four bottomLine alpha omega">
                    <h3>Archbishop speaks of 'darker side of Church life'</h3>
                </div>
            </div>

            <div class="four marginBottom">
                <div class="four bottomLine alpha omega">
                    <h3>Irish girls ranked among top binge drinkers by global study</h3>
                </div>

                <div class="four bottomLine alpha omega">
                    <h3>Yellow wind warning remains in effect</h3>
                </div>
            </div>

            <div class="four marginBottom omega">
                <div class="four bottomLine alpha omega">
                    <h3>Norwegian Air to deploy Dreamliner to replace 737 Max on Dublin flights</h3>
                </div>

                <div class="four bottomLine alpha omega">
                    <h3>Ronaldo hits eighth Champions League hat-trick as Juventus go through</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="fullgray">
        <div class="container">
            <div class="twelve">
                <div class="five color alpha">
                    <h3>Most Recent</h3>
                </div>
            </div>

            <div class="twelve">
                <div class="four marginBottom alpha">
                    <div class="four color colorBottomLine alpha omega">
                        <h3>May’s 24 hours to come up with Brexit plan or face EU crash-out</h3>
                    </div>

                    <div class="four color colorBottomLine alpha omega">
                        <h3>Mother-of-three who went missing after hen party to be laid to rest in wedding dress she never got to wear</h3>
                    </div>
                </div>

                <div class="four marginBottom">
                    <div class="four color colorBottomLine alpha omega">
                        <h3>Nine-hour wait for bed as children among 580 patients left on trolleys</h3>
                    </div>

                    <div class="four color colorBottomLine alpha omega">
                        <h3>'I'm not sure how we'll get through' - father of Cookstown tragedy victim speaks out as funeral details released</h3>
                    </div>
                </div>

                <div class="four marginBottom omega">
                    <div class="four color colorBottomLine alpha omega">
                        <h3>Woman 'being investigated by police' after she called a transgender woman a man</h3>
                    </div>

                    <div class="four color colorBottomLine alpha omega">
                        <h3>Klopp on familiar ground as Liverpool face Bayern test</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
