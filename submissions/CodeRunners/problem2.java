import java.io.*;

class problem2
{
	public static void main(String args[])throws Exception
	{
	int t,j,i,s=0,z,count=0;
	BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
	t=Integer.parseInt(br.readLine());
	int b[]=new int[t];
	for(i=0;i<t;i++)
	{
	int q=Integer.parseInt(br.readLine());
    z=q;
	for(j=2;j<=z;j++)
	{
	while(q%j==0)
	{
	 count=count+1;
     q=q/j;
	}
	if(count>=1)
	{
		s=s+j;
		count=0;

	}
	}
	System.out.println((s+1));
	s=0;
	}
	//for(i=0;i<t;i++)
    //System.out.println(b[i]);
	}
}