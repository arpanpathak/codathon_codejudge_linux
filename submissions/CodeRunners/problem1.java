import java.util.*;
class problem1
{
	public static void main(String args[])
	{
	long n;int t;int i;
	Scanner sc=new Scanner(System.in);
    t=sc.nextInt();
    if(t>=1&&t<=65)
    {
      long q[]=new long[t];
      for(i=0;i<t;i++)
      {
	n=sc.nextLong();
	double a=Math.pow(2,n);
	long b=(long)(a-1);
	q[i]=b;
	}
      for(i=0;i<t;i++)
       System.out.println(q[i]);
      
    }
}
}