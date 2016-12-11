import java.io.*;
public class problem3
{
public static void main(String args [])throws IOException
{
    DataInputStream in=new DataInputStream(System.in);
    System.out.println();
    int a=0;
    long b=0;
    int t=Integer.parseInt(in.readLine());
    for(int i=1;i<=t;i++)
    {
        a=Integer.parseInt(in.readLine());
        b=Long.parseLong(in.readLine());
        if((0<=a && a<=20) && (0<=b &&b<=2147483000))
        System.out.println(((int)(Math.pow(a,b)))%10);   
    }
}
}
