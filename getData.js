/*
 * Copies data from kattis problem page, needs to be run per page
 * copy and paste into dev console on google chrome
 */

var problems = document.getElementsByTagName("tbody")[0].rows

var result = '';

for(problem of problems){
    result += problem.cells.item(0).innerHTML.replace(/<a href=\"(.+)\">(.+)<\/a>$/, "https://open.kattis.com$1\t$2\t") + problem.cells.item(8).innerHTML + "\n";
}
copy(result);