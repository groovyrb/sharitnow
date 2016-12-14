<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>select demo</title>

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
   <link href="https://www.mountaingoatsoftware.com/ee_stylesheets/mgs.min.0422161733.css" media="screen" rel="stylesheet" />


<link href="https://www.mountaingoatsoftware.com/ee_stylesheets/print.min.css" media="print" rel="stylesheet" />
</head>

<style>	
	h1{text-align: center;}
.abc a{display:inline-block;}
</style>
<script>
$(function(){
    $(document.body).bind('mouseup', function(e){
        var selection;
                
        if (window.getSelection) {
          selection = window.getSelection();
        } else if (document.selection) {
          selection = document.selection.createRange();
        }
            
       // selection.toString() !== '' && alert('"' + selection.toString() + '" was selected at ' + e.pageX + '/' + e.pageY);
        if(selection.toString() !== ''){
			 $("#abc").css({"top": e.pageY, "left": e.pageX,"position":"absolute","display":"block"});
		//	 document.getElementById("demo").innerHTML =selection.toString();
			 $("a#twitter").attr('href', "https://twitter.com/share?url=https://techspawn.com&text="+ selection.toString());
			 $("a#facebook").attr('href', "https://www.facebook.com/share.php?u=http://techspawn.com");
			 $("a#google").attr('href', "https://plus.google.com/share?url=http://techspawn.com");
			 $("a#linkdin").attr('href', "http://www.linkedin.com/shareArticle?mini=true&url=http://techspawn.com/share/plugin&title=Techspawn.com/share&summary='"+selection.toString()+"'&source=LinkedIn");
		}
		else{
			$("#abc").css({"display":"none"});			
			}
 
        
    });
   
    
    
});
</script>


<body id="parent">
	<h1>What ever you like just select and share </h1>
<div id="child1">
	<div class="container">
    <article itemscope="" itemtype="http://schema.org/Article" class="hentry hentry-full post-large">
	<div class="entry-content">
	
<div itemprop="articleBody"><p>Conventional, long-standing advice regarding transitioning to Scrum or any agile process has been to start with a pilot project, learn from it, and then spread agile throughout the organization. This approach is the frequently used start-small pattern in which an organization selects typically one to three scrum teams (of five to nine people each), gets them successful, and then expands from there. As agile spreads through the organization, new teams benefit from the lessons learned by the teams that have gone before. There are many variations of start small, depending on how many people the organization wants to transition and how quickly they want to do it. Start small can also be applied differently based on how risk averse or uncertain about the transition the organization is. For example, in some cases the first scrum team or teams will finish their projects before a second set of teams even begins. Other organizations will take an overlapping approach, where the second set of teams starts only one or two sprints after the first.</p>

<p>The start-small pattern, while popular, is not for everyone. Salesforce.com, for example, followed an opposite pattern. I remember answering my phone on October 3, 2006, and hearing Chris and Steve from Salesforce.com tell me that they had just converted 35 teams to Scrum overnight. They asked if I'd like to help. My initial thought was that they needed a psychiatrist more than a Scrum consultant. Not one to shrink from a challenge, though, I agreed to help, packed a copy of Freud alongside my laptop, and set off for their office in San Francisco. Part of what I saw there wasn't entirely unexpected— teams and individuals in an uproar over such a sudden, far-reaching change—but I also saw other things that helped this large-scale, rapid adoption succeed.</p>

<p>Salesforce.com was pursuing the all-in pattern, which draws its name from a poker player who bets all of his chips on one hand. Salesforce.com has a hard-driving, aggressive, achievement-driven culture that would not have been a good fit for a cautious start-small approach. When key executives were presented with a proposal to adopt Scrum, they were convinced. They felt that if Scrum was worth doing for one team, it was worth doing for all teams. They pushed their agile poker chips into the middle of the table and went all in.</p>

<p>Surprisingly, the all-in and start-small patterns can be combined. An increasingly common approach is a one- to three-team pilot project followed immediately by going all in. The pilot in this case serves the typical purpose of allowing the organization to learn about agile or Scrum and how it will function there. However, the pilot in this scenario also serves the more important purpose of increasing organizational awareness. If you're going to transition 200 or more people all at once, it is extremely helpful to be able to point to one scrum team who has already done it and say, “We're all going to do what they did.”</p>

<h2><b>Reasons to Prefer Starting Small When Transitioning to Agile</b></h2>

<p>The start-small approach offers several advantages.</p>

<ul>
    <li><strong>Starting small is less expensive.</strong> An all-in transition will almost certainly cost more than starting small. Because of the greater number of people learning a new way of working all at the same time, all-in transitions generally rely more heavily on outside coaches, ScrumMasters, and trainers. The slower pace of a start-small adoption allows the organization to build internal expertise and then use that to help the scrum teams that start later. Starting small also saves money because early mistakes affect only a subset of the organization. Tom Gilb, who was perhaps the original agilist, has written, “If you don't know what you're doing, don't do it on a large scale.”</li>
    <br>
    <li><strong>Early success is almost guaranteed</strong><b>.</b> By carefully selecting the initial project and team members, you can almost guarantee the success of your first agile or Scrum project. You may consider this cheating; I don't. When starting small, a goal of the first few projects is to generate the knowledge that will enable a successful rollout. There may be value in starting with a project and team that make success easy and then learning from its experiences. Additionally, an early success can be vital to gaining buy-in from skeptics or fencesitters.</li>
    <br>
    <li><b>Starting small avoids the big risk of going all in.</b> An all-at-once transition can be very risky. Small mistakes will be magnified across the entire transition effort. Perhaps the most significant risk to an all-in approach is that you will be unlikely to get a second chance. If you start to transition the entire organization, make a mistake that increases resistance, and then revert to your pre-agile process while figuring out how to overcome the newly discovered issues, it is unlikely that team members will give you a second chance to start the transition. Resistance by that point will likely be so entrenched that the transition effort will have failed. By contrast, if you start small and find a fatal flaw in how you've started, you can keep the next round the same size as the current one, rather than expanding, effectively restarting the transition process.</li>
    <br>
    <li><strong>Starting small is less stressful.</strong> Twenty-first century organizations and their employees are under constant stress. An announcement that the whole development organization is adopting agile, which affects so many aspects of everyday work, could be the proverbial straw that breaks the camel's back. The stress of transitioning is reduced by starting small because early adopters become coaches and ambassadors. They encourage other groups to make the transition with stories of their successes and honest discussions of the challenges they faced and overcame.</li>
    <br>
    <li><strong>Starting small can be done without reorganizing.</strong> Most organizations that fully adopt an agile process will eventually undergo some degree of reorganizing. This can create further stress and can increase resistance from some individuals. By starting small, the need to reorganize can be put off longer, ideally until valuable experience has been gained.</li>
</ul>

<h2><b>Reasons to Prefer Going All In </b><b>When Transitioning to Agile</b></h2>

<p>Just as there are reasons to prefer starting small, there are reasons to prefer an all-in transition:</p>

<ul>
    <li><strong>Going all in can reduce resistance.</strong> In anything less than an all-at-once transition, there will always be some skeptics who will hold out hope that the whole effort is a pilot that will soon be abandoned. Like Cortez burning his boats at Vera Cruz to prove his resolve to his soldiers, an organization that goes all in is demonstrating both its commitment to the new process and also that it will not turn back. This level of visible commitment to the change can be beneficial in helping the change succeed.</li>
    <br>
    <li><strong>It avoids problems created by having agile and traditional teams work together.</strong> If you transition anything short of the entire company all at once, you run the risk of having some teams being agile and others not. This means there will be times when an agile team needs to coordinate work with a traditional team, which creates challenges because of the different attitudes agile and traditional teams bring to things like planning, deadlines, and communication. These problems go away when the entire organization adopts agile at the same time. Chris Fry and Steve Greene of Salesforce.com report that “the key factor driving us toward a big-bang rollout was to avoid organizational dissonance and a desire for decisive action. Everyone would be doing the same thing at the same time.”</li>
    <br>
    <li><strong>An all-in transition will be over more quickly.</strong> It is important to understand that an organization is never “done” becoming agile; there are always improvements to be made. However, there is definitely a time when employees can look back and say of the transition that the worst is over. An organization that goes all in can reach this point more quickly.</li>
</ul>

<h2><b>Choosing Between Going All In and Starting Small </b><b>When Transitioning to Agile</b></h2>

<p>As I mentioned, starting small has been the default approach recommended by most agile authors and used in most agile adoptions. The combination of this approach's low risk and high likelihood of success make it hard to find fault with. Always choose to start small when there is reluctance by leaders in the organization to fully commit to agile. Success, even on a small scale, can be the best way to convince the skeptics. Always start small when there is a high cost associated with failure. If the cost of failure is too high for those leading the transition, starting small is the way to go, even if it may not be best for the organization as a whole. Start small is probably not the best approach when your organization urgently needs the benefits of agile. (But if you do choose to start small, scale quickly.) Starting small is safe, but can be slow.</p>

<p>Going all in should be used in limited but important cases. Consider going all in if time is critical. Although an all-in approach may cost more money, it will cost less time. If time is your primary concern, all in may be the best solution. Consider going all in if you, like Salesforce.com, want to send a clear message to a small number of critics and stakeholders that Scrum is here to stay. Never go all in without enough experienced ScrumMasters or coaches to serve each team. It doesn't matter in the short term whether these individuals are employees or consultants; but eventually you'll want all them to be employees. Finally, size matters. If there are only ten of you, you might as well go all in. But for teams of more than perhaps 400, going all in may not be logistically possible.</p>

<p>Whichever route you choose for transitioning to agile, remember that the transition is only part of the work. Once you've successfully reached the point where you can say your organization is agile, the goal becomes continuously improving and becoming even more agile.</p>
</div>

</div>
</article>
</div>
<div id='abc' class='abc' style='display:none'>
	<a id='facebook' href='javascript::' target='_blank'><img src='facebook.png'/></a>
	<a id='linkdin' href='javascript::' target='_blank'><img src='linkedin.png'/></a>
	<a id='twitter' href="https://twitter.com/share?url=https%3A%2F%2Fdev.twitter.com%2Fweb%2Ftweet-button&via=twitterdev&
  related=twitterapi%2Ctwitter&hashtags=example%2Cdemo&text=''" target='_blank'><img src='twitter.png'/></a>
	<a id='google' href='javascript::' target='_blank'><img src='google.png'/></a>
</div>
	
</div>

</body>
</html>
