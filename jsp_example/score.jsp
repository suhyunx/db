<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>장학금수혜결과</title>
</head>
<body>
<%
request.setCharacterEncoding("utf-8");
String inputScores=request.getParameter("inputScore");
int inputScore = Integer.parseInt(inputScores);
String grade;
if (inputScore >= 90)
	grade = "A";
else if (inputScore >= 80)
	grade = "B";
else if (inputScore >= 70)
	grade = "C";
else if (inputScore >= 60)
	grade = "D";
else
	grade = "F";
%>
<h1>시험점수 <%= inputScores %>점</h1><br><br>
<h1><%= grade %>학점입니다.</h1><br>
<a href ="PJM.html">시험점수입력</a>
</body>
</html>