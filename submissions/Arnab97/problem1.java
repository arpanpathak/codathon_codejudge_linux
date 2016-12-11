
import java.io.*;
class problem1
{
    public static void main()throws IOException
    {
        InputStreamReader read = new InputStreamReader(System.in);
        BufferedReader ob = new BufferedReader(read);
        int order = Integer.parseInt(ob.readLine ());
        int print[] = new int[order];
        int k = 0;
        String w = "";
        for (int i=1;i<=order;i++)
        {
            String s = ob.readLine();
            int l = s.length();
            for (int j=0;j<l;j++)
            {
                char ch = s.charAt(j);
                if (ch=='$')
                {
                    String price = s.substring(j+1);
                    price = price.trim();
                    int l1 = price.length();
                    for (int m =0;m<l1;m++)
                    {
                        char ch2 = price.charAt(m);
                        if (ch2=='0' || ch2=='1' || ch2=='2' || ch2=='3' || ch2=='4' || ch2=='5' || ch2=='6' || ch2=='7' || ch2=='8' || ch2=='9' || ch2==' ')
                            w = w + ch2;
                        else
                        {
                            w = w + "";
                            break;
                        }
                    }
                    w = w.trim();
                    String ss = "";
                    for (int q=0;q<w.length();q++)
                    {
                        char ch3 = w.charAt(q);
                        if (ch3!=' ')
                            ss = ss + ch3;
                        else 
                            ss = ss + "";
                    }
                    int p = Integer.parseInt(ss);
                    print[k] = p;
                    k++;
                    w = "";
                }
            }
        }
        for (int i=0;i<order;i++)
        {
            System.out.println("$"+print[i]);
        }
    }
}
