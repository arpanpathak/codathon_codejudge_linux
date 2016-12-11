import java.io.*;
class problem2
{
public static void main(String args [])throws IOException
{
InputStreamReader read = new InputStreamReader(System.in);
BufferedReader ob = new BufferedReader(read);
int t = Integer.parseInt(ob.readLine ());
for (int i=0;i<t;i++)
{
int a = Integer.parseInt(ob.readLine ());
System.out.println( LCM(a)+a);
}
}

static long LCM(int m)
{
long s = 1;
for (int j=2;j<=Math.sqrt(m);j++)
{
if ((m%j)==0)
s = s + j+(m/j);
}
if(Math.sqrt(m)==Math.floor(Math.sqrt(m)))s-=Math.sqrt(m);
return s;
}
}
