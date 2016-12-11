import java.util.*;
class problem3
{
    public static void main(String args[])
    {
        double a,b,c;
        int r,p=1;
        Scanner sc=new Scanner(System.in);
        int n=sc.nextInt();
        while(p<=n)
        {
            a=sc.nextDouble();
            b=sc.nextDouble();
            c=(int)(Math.pow(a,b));
            r=(int)(c%10);
            System.out.println(r);
            p=p+1;
        }
    }
}
