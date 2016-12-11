import java.io.*;
class program1
{BufferedReader br=new BufferedReader(new InputStreamReader(System.in)); 
 int n=0;int si=0;int j=0;int Si=0;int c=0;
 void main()throws IOException
 {System.out.println("Give the number of inputs ");
  n=Integer.parseInt(br.readLine()); String alpha[]=new String[n];  
  for(int i=0;i<n;i++)
    {System.out.println("enter the line "+(i+1));
     alpha[i]=br.readLine();
    }
  for(int i=0;i<n;i++)
     {for(j=1;;j++)
        { if(alpha[i].charAt(j-1)=='\n')
             break;
            }
       
   
    {for(c=0;c<j-1;c++)
        {if(alpha[i].charAt(c)=='$')
            {while((int)(alpha[i].charAt(c))>48&&(int)(alpha[i].charAt(c))<=57)
                   {Si=Si*10+(int)(alpha[i].charAt(c));c++;
                       if(c==j)
                         {System.out.println('$'+Si);
                         break;}
                    }
                }
            }
            c=0;}}}}
            
               
                   
                   
     