<%@ page language="java" contentType="text/html; charset=UTF-8" 
    pageEncoding="UTF-8"%>
<%@ page import="java.sql.*" %>
<!DOCTYPE html>
<html>
<head>
<title>DB Connect</title>
</head>
<body>
    <%
    Connection conn=null;
    String driver = "oracle.jdbc.driver.OracleDriver";
    String url = "jdbc:oracle:thin:@localhost:1521:XE";
        
    Boolean connect = false;
        
    try{
        Class.forName(driver);
        conn=DriverManager.getConnection(url,"user","password");
        connect = true;
        conn.close();
    }catch(Exception e){
        connect = false;
        e.printStackTrace();
    }
    %>
    <%
    if(connect==true){%>
        DB 연결되었습니다.
    <%}else{ %>
        DB 연결에 실패하였습니다.
    <%}%> 

</body>
</html>