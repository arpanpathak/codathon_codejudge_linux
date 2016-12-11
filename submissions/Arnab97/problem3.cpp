
import java.io.*;
class problem3
{
    public static void main(String args [])throws IOException
    {
        InputStreamReader read = new InputStreamReader(System.in);
        BufferedReader ob = new BufferedReader(read);
        System.out.println("Enter the number of test cases");
        int c = Integer.parseInt(ob.readLine());
        double print[] = new double[c];
        int k = 0;
        String w = "";
        String w1 = "";
        int a = 0,b = 0;
        int arr[] = new int[2];
        int l = 0,z = 0;
        for (int i=0;i<c;i++)
        {
            String s = ob.readLine ();
            for (int j=0;j<s.length();j++)
            {
                char ch = s.charAt(j);
                w = "";
                if (ch!=' ')
                    w = w + ch;
                else
                {
                    arr[l++] = Integer.parseInt(w);
                    System.out.println(w);
                    j++;
                }
            }
            double e = Math.pow(arr[0],arr[1]);
            print[k++] = e%10;
        }
        for (int i=0;i<2;i++)
        {
        System.out.println(print[i]);
        }
    }
}
