import java.util.*;
class problem1
{
	public static void main(String args[])
	{
		Scanner sc=new Scanner(System.in);
		int T=sc.nextInt();
		if(T>=1 && T<=65)
		{
			for(int i=0;i<T;i++)
			{
				int K=sc.nextInt();
				for(int j=K;j>=0;j--)
				{
					int b=binary(j);
					if(b==j)
					{
						System.out.println(+j);
						break;
					}
				}
			}
		}
	}
static int binary(int a)
{
	int sum=0,m=0;
while(a>0)
{
m=a%2;
if(m==1)
sum=sum+1;
a/=2;
}
return sum;
}
}
