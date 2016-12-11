import java.util.Scanner;
class problem1
{
	public String str[];
	public int n;
	Scanner sc=new Scanner(System.in);
	void getinput()
	{
		n=sc.nextInt();
		str=new String[n];
		for(int i=0; i<n; i++)
		str[i]=sc.nextLine;
	}
	void show()
	{
		for(int i=0; i<n; i++)
		{
			String str1=str.charAt(i);
			for(int j=0; j<str1.length; j++)
			{
				char ch=str1.charAt(j);
				if(ch=='$')
				{
					System.out.print('$');
					int k=j+1;
					
					while(str1.charAt(k)=='0' || str1.charAt(k)=='1' || str1.charAt(k)=='2' || str1.charAt(k)=='3' || str1.charAt(k)=='4' || str1.char(k)=='5' || str1.charAt(k)=='6' || str1.charAt(k)=='7' || str1.charAt(k)=='8' || str1.charAt(k)=='9' || str1.charAt(k)==' ')     
					{
					if(str1.charAt[k]!=0 || str1.charAt[k]!=' ')
					{
						int p=k+1;
						
						if(str1.charAt[p]!=' ')
						{
							char ch1=str1.charAt[p];
							System.out.print(ch1);
							p++;
						}
					}
					}
				}
				
			}
			System.out.println(" ");
		}
	}
	public static void main(String args[])
	{
		problem1 ob=new problem1();
		ob.getinput();
		ob.show();
	}
}