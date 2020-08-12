package week3;

import java.util.Scanner;

public class cafe {
	public static void main(String[] args)
	{
		String menu="메뉴 \n"+
				"1. 아메리카노: 2500원 \n"+
				"2. 카페라떼: 3000원\n"+
				"3. 화이트모카라떼: 4000원\n"+
				"4. 햄치즈샌드위치: 6000원\n"+
				"5. 음식주문\n";	
		System.out.println(menu);
		Scanner scan = new Scanner(System.in);
		int total=0;
		while(true) 
		{
			System.out.print("원하시는 메뉴번호를 입력하세요: ");
			int num = scan.nextInt();
			if(num==1) 
			{
				System.out.println("  아메리카노를 주문하셨습니다");
		        	total+=2500; //total=total+2500
			}			   
		        else if(num==2)
		        {
		        	System.out.println("  카페라떼를 주문하셨습니다");
		        	total+=3000;
		        }
		        else if(num==3)
		        {
		        	System.out.println("  화이트모카라떼를 주문하셨습니다");
		        	total+=4000;
		        }
		        else if(num==4)
		        {
		        	System.out.println("  햄치즈샌드위치를 주문하셨습니다");
		        	total+=6000;
		        }
		        else if(num==5)
		        {
		        	System.out.println("총 주문하신 금액은"+total+"입니다");
		        	System.out.println(" 감사합니다. 기다리시면 곧 나옵니다");
		        	break;
		        }
		        else
		        {
		        	System.out.println("잘못된 주문입니다.");
			}
		}
		scan.close();
	}
}
