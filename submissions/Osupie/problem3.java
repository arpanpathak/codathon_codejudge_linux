import java.util.*;
class problem3
{
    public static void main(String args[])
    {
        double a,b,c;
        int r,p=1,m=0;
        Scanner sc=new Scanner(System.in);
        int n=sc.nextInt(); 
        int k[]=new int[n];
        while(p<=n)
        {
            a=sc.nextDouble();
            b=sc.nextDouble();
            c=(int)(Math.pow(a,b));
            r=(int)(c%10);
            k[m]=r;
            p=p+1;
            m=m+1;
        }
        for(p=0;p<m;p++)
        {
            System.out.print(k[p]+" ");
        }
    }
}
