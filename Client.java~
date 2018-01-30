import java.rmi.Naming;
import java.util.*;
public class Client
{
	public static void main(String args[])
	{
		try
		{
			Inter ai=(Inter)Naming.lookup("//localhost/Implement");
			String name;
			String city;
			Scanner s= new Scanner(System.in);
			//System.out.println("\n\nPlease provide your details to Login");
			System.out.println("Enter your name:");
			name=s.nextLine();
			System.out.println("Enter the shop name:");
			city=s.nextLine();
			//System.out.println("You have successfully logged in. Enjoy shopping");			
			//ArrayList<String> products=new ArrayList<String>();
			
			String products[]=new String[7];
			int prices[]=new int[10];
			String msg1,msg2;
			products=ai.orderDetails();
			prices=ai.getPrice();
			System.out.println("1.Show Items");
			System.out.println("2.Purchase items");
			System.out.println("3.Cancel items");
			System.out.println("4.Order details");
			//System.out.println("5.Log Out");
			int ch,c,l=0;
			int qty[]=new int[10];
			for(l=0;l<products.length;l++){
				qty[l]=0;
			}
			int n[]=new int[10];
			//int z[]=new int[10];
			for(l=0;l<6;l++){
				n[l]=0;
			}
			int x[]=new int[10];
			do
			{
				System.out.println("Enter your choice:" ); //1)Show Items \t2)Purchase items \t3)Cancel items \t4)Order Details \t");
				ch=s.nextInt();
				switch(ch)
				{
					case 1: x=ai.show();
							for(l=0;l<products.length;l++){
								System.out.println(l+":"+products[l]+"--->"+x[l]+"\t    Cost of each item--->"+prices[l]);
							}
							break;
					case 2: System.out.println("Which item do u want to buy(Enter Product No) :");
							c=s.nextInt();
							System.out.println("How much quantity of it?");
							qty[c]=s.nextInt();
							msg1=ai.purchase(c,qty);
							System.out.println(msg1);
							break;
					case 3: System.out.println("Enter which product(order) is to be cancelled(Enter product no.)...");
							c=s.nextInt();						
							System.out.println("Enter number of quantity of the product to be cancelled ");
							n[c]=s.nextInt();
							msg2=ai.cancelitems(c,n,qty);
							System.out.println(msg2);
							break;
					case 4: 
							for(l=0;l<products.length;l++)
							{
								qty[l]=qty[l]-n[l];
							}
							System.out.println("Name: "+name);
							System.out.println("Shop: "+city);
							for(l=0;l<products.length;l++)
							{
								if(qty[l]!=0 && qty[l]>=0)
								{
								System.out.println("Product: "+products[l]+"--->"+qty[l]+"  Total Price:"+(qty[l]*prices[l]));
								}
							}
							break;
					case 5: System.out.println(name+" Grocery Inventory is updated.\n");
							break;
				}
			}while(ch!=5);
		}
		catch(Exception e)
		{
			System.out.println("Client Exception: "+e);
		}
	}
}
