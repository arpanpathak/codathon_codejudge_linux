import java.util.*;
class problem1
{
    public static void main(String args[])
    {
        int n,k=0,m=0; String Si,f="";
        System.out.println("Enter the order of description");
        Scanner sc=new Scanner(System.in);
        Scanner sc1=new Scanner(System.in);
        n=sc.nextInt();
        if((n>=1)||(n<=500500))
        {
            int count=0,l,i;char c=' ';
            while(count<n)
            { 
                System.out.println("Enter the description ");  
                Si=sc1.nextLine();
                l=Si.length();
                for(i=0;i<l;i++)
                {
                    c=Si.charAt(i);
                    if(c=='$')
                    {
                        m=1;
                        f=f+c;
                    }
                    if((Character.isDigit(c))&&(m==1)&&(c!='0'))
                    {
                        f=f+c;
                        m=2;
                        k=1;
                    }
                    if((m==2)&&(c=='0'))
                    {
                        f=f+c;
                    }
                }
                System.out.println(f);
                count=count+1;
            }
        }
    }
}
