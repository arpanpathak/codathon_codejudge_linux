import java.util.*;
class problem5
{
	public static void main(String args[])
	{
		int i,j,t,n,min,k,c=2,g=0;
		Scanner sc=new Scanner(System.in);
		t=sc.nextInt();
		for(i=0;i<t;i++)
		{
			n=sc.nextInt();
			int a[]=new int[n];
			for(j=0;j<n;j++)
			a[j]=sc.nextInt();
			min=a[0];
			for(j=0;j<n;j++)
 			{
 				
 				if(min>a[j])
 				{
 				min=a[j];
 				}
 			}
 				for(j=0;j<n;j++)
 				{
 				 while(c<=min)	
                 {
                 for(k=0;k<n;k++)
                 {
                 if(a[k]%c==0)
                 g=g+1;
                 }
                 if(g==n)
                 System.out.print(c+" ");
                 g=0;
                 c=c+1;
                 }
 				
		}
 				}
	}
}