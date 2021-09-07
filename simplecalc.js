var arg = document.getElementsByName("arg1");
var answer_input = document.getElementsByName("answer");
var answer = eval(arg)
inputF.value = answer;
answer_input.innerHTML = "Value = " + "'" + inputF.value + "'";
