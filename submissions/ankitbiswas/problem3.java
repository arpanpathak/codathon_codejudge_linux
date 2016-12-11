import java.io.*;
class problem3
{BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
 int t=0;int a=0;int b=0;
 void main()throws IOException
 {System.out.println("Enter test cases");
   t=Integer.parseInt(br.readLine());int ar[]=new int[t];int arr[]=new int[t];
  for(int i=1;i<=t;i++)
    {a=Integer.parseInt(br.readLine());
     b=Integer.parseInt(br.readLine());
     int s=(int)(Math.pow(a,b));int c=s;int coun=0;
     
     arr[i-1]=s%10; 
    }
  for(int i=1;i<=t;i++)
   {System.out.println(arr[i-1]);}
    
  }}
    
  