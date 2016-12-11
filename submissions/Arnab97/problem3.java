
import java.io.*;
class problem3
{
    public static void main(String args [])throws IOException
    {
        InputStreamReader read = new InputStreamReader(System.in);
        BufferedReader ob = new BufferedReader(read);
        int c = Integer.parseInt(ob.readLine());
        int print[] = new int[c];
        int k = 0;
        String w = "";
        String w1 = "";
        int a = 0,b = 0;
        String arr[] = new String[2];
        int l = 0,z = 0;
        for (int i=0;i<c;i++)
        {
            String s = ob.readLine ();
            for (int j=0;j<s.length();j++)
            {
                char ch = s.charAt(j);

                if (ch!=' ')
                {
                    w = w + ch;
                }
                else
                {
                    arr[0] = w;
                    z = j;
                }
            }
            arr[1] = s.substring(z+1);
            a = Integer.parseInt(arr[0]);
            b = Integer.parseInt(arr[1]);
            double e = Math.pow(a,b);
            print[k++] = (int)e%10;
        }
        for (int i=0;i<c;i++)
        {
            System.out.println(print[i]);
        }
    }
}

