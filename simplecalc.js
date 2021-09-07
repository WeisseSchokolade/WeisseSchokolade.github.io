var arg1 = document.getElementsByName("arg1");
var answer_input = document.getElementsByName("answer");

var answer = eval(arg1)

inputF.value = answer;
answer_input.innerHTML = "Value = " + "'" + inputF.value + "'";
