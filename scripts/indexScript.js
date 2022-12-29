function education() {
    let kbutton = document.getElementById("e-button");
    let rbutton = document.getElementById("s-button");
    let rbutton1 = document.getElementById("i-button");

    kbutton.classList.add("active1");
    rbutton.classList.remove("active1");
    rbutton1.classList.remove("active1");
    let text = document.getElementById("words");
    text.innerHTML = "<p class='font' id='switch'>A teacher at heart, Tyler J. Meyer has dedicated much of his career to learning as much about the financial world as possible in order to provide the highest value for his clients.  In addition to being a Certified Financial Planner® (CFP®), one of the industry’s most esteemed professional designations, he is also a Chartered Financial Consultant® (ChFC®), Chartered Life Underwriter® (CLU®), Retirement Income Certified Planner® (RICP®), Financial Services Certified Professional® (FSCP®), and Certified in Long Term Care® (CLTC®).  These designations make Tyler one of the most educated advisors in the entire country.</p>";
}
function independence() {
    let kbutton = document.getElementById("i-button");
    let rbutton = document.getElementById("e-button");
    let rbutton1 = document.getElementById("s-button");

    kbutton.classList.add("active1");
    rbutton.classList.remove("active1");
    rbutton1.classList.remove("active1");
    let text = document.getElementById("words");
    text.innerHTML = "<p class='font' id='switch'>As an independent wealth management firm, we represent you and your interests rather than any specific company. While some firms recommend investment products manufactured by a parent organization, we have no such ties - we simply deliver objective recommendations.</p>";
}
function service() {
    let kbutton = document.getElementById("s-button");
    let rbutton = document.getElementById("e-button");
    let rbutton1 = document.getElementById("i-button");


    kbutton.classList.add("active1");
    rbutton.classList.remove("active1");
    rbutton1.classList.remove("active1");
    let text = document.getElementById("words");
    text.innerHTML = "<p class='font' id='switch'>With QED Wealth Solutions, you will experience next-level service from a team that is focused on providing you value in every interaction. Your time is valuable, so our goal is to provide accurate and friendly service in the fewest steps possible.</p>";
}
function resize() {
    var myDiv1 = document.getElementById('myDiv'); //get #myDiv
    var myDiv2 = document.getElementById('myDiv2'); //get #myDiv
    myDiv2.classList.remove('hidden'); //remove hidden class
    height = myDiv2.offsetHeight; //get height of #myDiv
    console.log(myDiv2.offsetHeight); //print height to console
    myDiv2.classList.add('hidden'); //add hidden class
    myDiv1.style.height = height + 'px !important;'; //set height of #myDiv
}
resize();
window.onresize = resize();
