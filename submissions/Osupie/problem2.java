import java.util.*;
class problem2
{
    public static void main(String args[])
    {
        int n,c,i,j,k,p,z=0;
        Scanner sc=new Scanner(System.in);
        Scanner sc1=new Scanner(System.in);
        n=sc.nextInt();
        for(p=1;p<=n;p++)
        {
            c=sc1.nextInt();
            if(c>=5&&c<=1000)
            {
                i=sc1.nextInt();
                int arr[]=new int[i];
                for(j=0;j<i;j++)
                {
                    arr[j]=sc.nextInt();
                    if(arr[j]>=1&&arr[j]<=1000)
                        continue;
                    else
                    {
                        z=1;
                        break;
                    }
                }
                if(z==1)
                    break;
                for(j=0;j<i;j++)
                {
                    p=arr[j];
                    for(k=j+1;k<i;k++)
                    {
                        if(p+arr[k]==c)
                        {
                            System.out.println((j+1)+" "+(k+1));
                            z=1;
                            break;
                        }
                    }
                    if(z==1)
                        break;
                }
                if(z==0)
                    System.out.println("NA");
            }
        }
    }
}