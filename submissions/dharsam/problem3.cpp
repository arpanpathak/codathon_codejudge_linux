import java.io.*;
public class problem3
{
public static void main(String args [])throws IOException
{
    DataInputStream in=new DataInputStream(System.in);
    String s=" ";
    int a=0;
    long b=0;
    System.out.println("Enter no. of test cases : ");
    int t=Integer.parseInt(in.readLine());
    for(int i=1;i<=t;i++)
    {
        System.out.println("Enter 'a' and 'b' (both not 0) :");
        a=Integer.parseInt(in.readLine());
        b=Long.parseLong(in.readLine());
        System.out.println("Last digit of a ^ b : "+((int)(Math.pow(a,b)))%10);   
    }
}
}
